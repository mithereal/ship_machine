// Let's try to keep this under 100 lines.
const http = require('http')
const port = 8080
const apiUrl = 'http://php:80/api/'

// Get data from the Api
// Just a promise wrapper for http.get

const apiFetch = () => {
  return new Promise((resolve, reject) => {

    // https://nodejs.org/api/http.html#http_http_get_options_callback
    http.get(apiUrl, res => {
      const contentType = res.headers['content-type']
      let error
      let data = ''

      if (res.statusCode !== 200) {
        error = new Error('Api error / statusCode: ' + res.statusCode)
      } else if (!/^application\/json/.test(contentType)) {
        error = new Error('Api error / contentType: ' + contentType)
      }

      if (error) {
        console.error(error.message)
        res.resume()
        reject(error)
      }

      res.setEncoding('utf8')
      res.on('data', chunk => { data += chunk })
      res.on('end', () => {
        try {
          const apiJson = JSON.parse(data)
          console.log('Api success / apiJson: ', apiJson)
          resolve(apiJson)
        } catch (e) {
          console.error('Api error / response: ', e.message)
          reject(e.message)
        }
      })
    }).on('error', e => {
      console.error('Api error / get: ', e.message)
      reject(e.message)
    })
  })
}

// Server

const server = http.createServer((req, res) => {
  console.log('request: ' + req)
  res.writeHead(200, { 'Content-Type': 'text/html' })

  // Fetch the api
  apiFetch().then(json => {
    res.write(json)
    res.end()
  }).catch(error => {
    res.write(error)
    res.end()
  })
})

server.listen(port)
console.log('Server running at http://localhost:' + port + '/')