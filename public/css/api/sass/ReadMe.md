File Structure

sass/ 
| 
|– base/ 
|   |– _reset.scss        # Reset/normalize 
|   |– _typography.scss   # Typography rules 
|   ...                   # Etc… 
| 
|– components/ 
|   |– _buttons.scss      # Buttons 
|   |– _forms.scss        # Forms 
|   |– _navigation.scss   # Navigation 
|   ...                   # Etc… 
| 
|– helpers/
|   |– _variables.scss    # Sass Variables 
|   |– _mixins.scss       # Sass Mixins
|   |- _functions.scss 	  # Sass Functions 
|   |– _placeholders.scss # Sass Placeholders 
|   |– _helpers.scss      # Helpers (classes, states, etc...)
|   ...                   # Etc… 
| 
|– layouts/ 
|   |– _grid.scss         # Grid 
|   |– _header.scss       # Header 
|   |– _footer.scss       # Footer 
|   |– _sidebar.scss      # Sidebar 
|   ...                   # Etc… 
| 
|– pages/ 
|   |– _home.scss         # Home page specific styles (example/optional)
|   |– _contact.scss      # Contact page specific styles (example/optional)
|   ...                   # Etc… 
| 
|– themes/ 
|   |– _theme.scss        # Default theme
|   |– _admin.scss        # Admin theme 
|   ...                   # Etc… 
| 
|– vendors/
|   |– _bootstrap.scss    # Bootstrap (example/optional)
|   |– _jquery-ui.scss    # jQuery UI (example/optional)
|   ...                   # Etc… 
| 
| 
– main.scss               # Primary Sass file 