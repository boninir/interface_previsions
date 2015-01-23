set :application, "Interface Prévision"
set :domain,      "#{application}.com"
set :deploy_to,   "/var/www/<div id="">domain</div>"
set :app_path,    "app"

set :repository,  "git@github.com:HugoAndre/exp-stat-prev.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL