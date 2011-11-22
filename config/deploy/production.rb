# repository info
set :branch, "master"

# This may be the same as your `Web` server
role :app, "sarnialambtonopenhouses.ca"

# directories
set :deploy_to, "/home/sloh/subdomains/live"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[com_openhouse filogix_auth public template]
