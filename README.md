# starter
Ale Starter Theme Source

Status of last deployment:<br>
<img src="https://github.com/CRIK0VA/starter/actions/workflows/cicd.yml/badge.svg?branch=main" />


## About

The site is built of Elementor widgets & WordPress Codex. The structure:
```
.
└── src/
    ├── plugin                  # Core Plugin for elementor widgets and WordPress plugin territory functions. 
    │   ├── core/               # Plugin classes or functions.
    │   ├── elementor/          # Elementor custom widgets, styles and js.
    │   │   ├── widgets         # Widgets folders.
    └── theme/                  # Theme files according to WP Template Hierarchy.
        ├── aletheme/           # Aletheme framework files: options panel, admin styles, tgma script etc.
        │   ├── assets/         # Dashboard images, css, js.
        │   ├── etc/            # WordPress hooks and settings, ex: enqueue styles and scripts, google fonts etc.
        │   ├── functions/      # Custom functions based on theme territory. 
        │   ├── options/        # Theme options panel core files. 
        │   ├── config.php      # Config file for options fields. 
        │   ├── constants.php   # Framework and theme constants. 
        ├── assets/             # CSS & JS folder. 
        ├── lang/               # languages folder.
        └── partials/           # Diverse partials that are included in templates

```
## Installation

#### Requirements
``` 
Docker and Docker Compose
Node 12+ with npm
```

#### Create docker containers
```
docker-compose up -d
```

#### Install Modules
```
npm i 
```

## Development

#### Start docker
```
docker-compose up -d
```

#### Run in dev mode 
To watch and build it automatically
```
npm run watch
```

## Production
#### Create the production version:
The code will be optimized for production use, saved in `dist` folder. **However, see bellow the preferred method: which is "Deploy".**
```
npm run prod
```

#### Deploy
On pushing to main branch the plugins and theme files (from /dist/) will automatically load to production server.
