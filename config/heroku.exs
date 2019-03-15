use Mix.Config

@url "ancient-spire-25588.herokuapp.com"

config :api, ApiWeb.Endpoint,
http: [port: System.get_env("PORT")],
url: [scheme: "https", host: @url, port: 443],
force_ssl: [rewrite_on: [:x_forwarded_proto]],
  cache_static_manifest: "priv/static/cache_manifest.json",
  secret_key_base: Map.fetch!(System.get_env(), "SECRET_KEY_BASE")


