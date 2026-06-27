Controllers
app/
└── Http/
    └── Controllers/
        ├── AboutController.php
        ├── Controller.php
        ├── Cs2Controller.php
        ├── HomeController.php
        ├── UtilitiesController.php
        └── ValorantController.php

CSS
resources/
└── css/
    ├── app.css
    │
    ├── base/
    │   ├── layout.css
    │   ├── reset.css
    │   ├── spacing.css
    │   ├── typography.css
    │   └── variables.css
    │
    ├── components/
    │   ├── background.css
    │   ├── badges.css
    │   ├── buttons.css
    │   ├── cards.css
    │   ├── cursor.css
    │   ├── forms.css
    │   ├── glass.css
    │   ├── page-header.css
    │   ├── panel.css
    │   ├── toast.css
    │   └── tool-card.css
    │
    ├── cs2/
    │   ├── buttons.css
    │   ├── controls.css
    │   ├── crosshair.css
    │   ├── layout.css
    │   ├── players.css
    │   ├── preview.css
    │   ├── responsive.css
    │   └── saved.css
    │
    ├── layout/
    │   ├── containers.css
    │   ├── footer.css
    │   ├── main.css
    │   └── navbar.css
    │
    ├── pages/
    │   ├── about.css
    │   ├── dashboard.css
    │   └── home.css
    │
    └── theme/
        └── design-system.css

JavaScripts 
resources/
└── js/
    ├── app.js
    ├── bootstrap.js
    ├── animations.js
    ├── glow.js
    ├── navbar.js
    ├── spotlight.js
    │
    ├── components/
    │   └── toast.js
    │
    ├── core/
    │   └── index.js
    │
    └── cs2/
        ├── actions.js
        ├── config.js
        ├── crosshair.js
        ├── presets.js
        ├── preview.js
        ├── search.js
        └── storage.js

Views 
resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    │
    ├── components/
    │   ├── background.blade.php
    │   ├── badge.blade.php
    │   ├── button.blade.php
    │   ├── card.blade.php
    │   ├── container.blade.php
    │   ├── feature-card.blade.php
    │   ├── footer.blade.php
    │   ├── glass-section.blade.php
    │   ├── page-header.blade.php
    │   ├── panel.blade.php
    │   ├── section.blade.php
    │   ├── toast.blade.php
    │   └── tool-card.blade.php
    │
    ├── cs2/
    │   ├── crosshair-generator.blade.php
    │   ├── config-generator.blade.php
    │   ├── maps.blade.php
    │   ├── pro-settings.blade.php
    │   ├── index.blade.php
    │   │
    │   └── components/
    │       ├── actions.blade.php
    │       ├── config.blade.php
    │       ├── controls.blade.php
    │       ├── players.blade.php
    │       ├── preview.blade.php
    │       ├── saved-crosshairs.blade.php
    │       └── settings.blade.php
    │
    ├── home/
    ├── about/
    ├── utilities/
    └── valorant/

Routes

routes/
├── web.php
└── console.php