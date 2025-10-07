```
└── 📁rick_and_morty
    └── 📁app
        └── 📁__tests__
            ├── test.fake.php
        └── 📁config
            ├── api.php
            ├── connection.php
            ├── database.sql
            ├── env.php
        └── 📁controllers
        └── 📁helpers
            ├── response.php
            ├── utils.php
            ├── validation.php
        └── 📁models
            ├── character.php
        └── 📁views
            └── 📁api
            └── 📁auth
                ├── login.php
            └── 📁characters
            └── 📁head
            ├── home.php
        ├── routes.php
    └── 📁github
        └── 📁workflows
    └── 📁public
        └── 📁css
        └── 📁img
        └── 📁js
        ├── index.php
    └── 📁vendor
    ├── .gitignore
    ├── docker-compose.yml
    └── Dockerfile
```










📁 project-root
│
├── 📁 app
│   ├── 📁 config
│   │   ├── database.php          # Configuración de conexión a DB
│   │   ├── api.php               # URLs o claves de APIs externas
│   │   └── env.php               # Variables globales
│   │
│   ├── 📁 controllers
│   │   ├── UserController.php
│   │   ├── AuthController.php
│   │   └── RickAndMortyController.php
│   │
│   ├── 📁 models
│   │   ├── User.php
│   │   └── Character.php
│   │
│   ├── 📁 views
│   │   ├── 📁 layouts            # Estructura común
│   │   │   ├── header.php
│   │   │   ├── navbar.php
│   │   │   ├── footer.php
│   │   │   └── scripts.php
│   │   │
│   │   ├── 📁 user               # CRUD de usuarios
│   │   │   ├── index.php
│   │   │   ├── create.php
│   │   │   ├── edit.php
│   │   │   └── show.php
│   │   │
│   │   ├── 📁 auth               # Login / registro
│   │   │   ├── login.php
│   │   │   ├── register.php
│   │   │   └── logout.php
│   │   │
│   │   ├── 📁 api                # Consumo de API externas
│   │   │   └── rickandmorty.php
│   │   │
│   │   └── home.php
│   │
│   ├── 📁 helpers
│   │   ├── utils.php
│   │   ├── response.php
│   │   └── validation.php
│   │
│   └── routes.php               # Enrutador central (define qué controlador carga)
│
├── 📁 public
│   ├── index.php                # Punto de entrada principal
│   ├── css/
│   │   └── custom.css
│   ├── js/
│   │   └── app.js
│   ├── img/
│   └── .htaccess                # URLs limpias (opcional)
│
├── 📁 vendor                    # Composer (si usas librerías externas)
│
├── composer.json
├── .gitignore
└── README.md
