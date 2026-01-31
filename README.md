# FullzTools

A modern PHP application following PSR-4 standards with a well-organized directory structure.

## Project Structure

The project has been refactored to align with modern PHP standards (PSR-4) and follows best practices for separation of concerns.

### Directory Organization

```
FullzTools/
├── src/                          # Source code directory
│   ├── Admin/                    # Administrative functionality
│   │   ├── Accounts.php          # User account management
│   │   ├── AjaxSupport.php       # AJAX request handling
│   │   ├── Cards.php             # Credit card management
│   │   ├── EmailsSettings.php    # Email configuration
│   │   ├── Emails.php            # Email operations
│   │   ├── FAQ.php               # FAQ management
│   │   ├── Files.php             # File operations
│   │   ├── GoogleVoice.php       # Google Voice management
│   │   ├── Index.php             # Admin dashboard
│   │   ├── News.php              # News/announcements
│   │   ├── Orders.php            # Order management
│   │   ├── Sellers.php           # Seller management
│   │   ├── Service.php           # Service management
│   │   ├── Settings.php          # System settings
│   │   ├── SSN.php               # SSN management
│   │   ├── Support.php           # Support tickets
│   │   └── Users.php             # User management
│   │
│   ├── Captcha/                  # CAPTCHA functionality
│   │   └── Captcha.php           # CAPTCHA generation and validation
│   │
│   ├── Config/                   # Configuration classes
│   │   ├── Auth.php              # Authentication handling
│   │   ├── Constants.php         # Application constants
│   │   ├── Database.php          # Database connection
│   │   ├── EmailSystemDb.php     # Email database operations
│   │   ├── Helpers.php           # Utility functions
│   │   ├── HttpHelpers.php       # HTTP utilities
│   │   ├── Logging.php           # Logging configuration
│   │   ├── Security.php          # Security operations
│   │   ├── Session.php           # Session management
│   │   ├── Settings.php          # Application settings
│   │   └── User.php              # User operations
│   │
│   ├── Includes/                 # Bootstrap and global includes
│   │   ├── Config.php            # Main configuration file
│   │   ├── Global.php            # Global helper functions
│   │   └── Emails/               # Email templates
│   │       ├── Templates/
│   │       │   ├── Admin/        # Admin email templates
│   │       │   │   ├── GoogleVoicePurchaseAdminHtml.php
│   │       │   │   └── GoogleVoicePurchaseAdminText.php
│   │       │   └── User/         # User email templates
│   │       │       ├── GoogleVoicePurchaseUserHtml.php
│   │       │       └── GoogleVoicePurchaseUserText.php
│   │       └── TemplatesBGAccs/  # BG Accounts email templates
│   │           ├── BGAccsPurchaseAdminHtml.php
│   │           ├── BGAccsPurchaseAdminText.php
│   │           ├── BGAccsPurchaseUserHtml.php
│   │           └── BGAccsPurchaseUserText.php
│   │
│   ├── Templates/                # View templates
│   │   ├── Admin/                # Admin templates
│   │   │   └── OrdersHistory.php
│   │   └── Elements/             # Reusable UI components
│   │       ├── Payment/          # Payment elements
│   │       │   ├── BTC.php       # Bitcoin payment
│   │       │   └── BTCSpeed.php  # Fast Bitcoin payment
│   │       ├── Alerts.php        # Alert messages
│   │       └── CartTotal.php     # Cart summary
│   │
│   └── Public/                   # Publicly accessible pages
│       ├── Index.php             # Homepage
│       ├── Login.php             # Login page
│       ├── Buy.php               # Product catalog
│       ├── Register.php          # Registration page
│       └── Cart.php              # Shopping cart
│
├── vendor/                       # Composer dependencies (managed by Composer)
│
├── tests/                        # Test suites
│   ├── Unit/                     # Unit tests
│   │   ├── HelpersTest.php
│   │   └── SecurityTest.php
│   ├── Integration/              # Integration tests
│   │   └── SampleIntegrationTest.php
│   └── Functional/               # Functional/end-to-end tests
│       └── SampleFunctionalTest.php
│
├── composer.json                 # Composer configuration
├── phpunit.xml                   # PHPUnit configuration
├── .gitignore                    # Git ignore rules
└── README.md                     # This file
```

## Design Principles

### PSR-4 Autoloading
All classes follow the PSR-4 autoloading standard:
- **Namespace**: `FullzTools\`
- **Base Directory**: `src/`
- **Class Naming**: CamelCase (e.g., `GoogleVoice.php`, `EmailsSettings.php`)

### Separation of Concerns
The structure separates different aspects of the application:

1. **Admin** - Administrative operations and management interfaces
2. **Config** - Configuration, utilities, and core services
3. **Captcha** - Security and verification
4. **Public** - User-facing pages and endpoints
5. **Templates** - View layer and UI components
6. **Includes** - Bootstrap files and global utilities

### Namespace Organization
Each directory maps to a namespace:
- `src/Admin` → `FullzTools\Admin`
- `src/Config` → `FullzTools\Config`
- `src/Captcha` → `FullzTools\Captcha`
- `src/Templates/Admin` → `FullzTools\Templates\Admin`
- `src/Templates/Elements` → `FullzTools\Templates\Elements`

## Installation

### Requirements
- PHP 7.4 or higher
- Composer

### Setup

1. **Install dependencies**:
   ```bash
   composer install
   ```

2. **Configure the application**:
   - Copy environment configuration
   - Update database credentials in `src/Config/Database.php`
   - Configure email settings

3. **Set up the web server**:
   - Point document root to `src/Public/`
   - Configure URL rewriting if needed

## Usage

### Autoloading
All classes are autoloaded via Composer. Example:

```php
<?php
require_once 'vendor/autoload.php';

use FullzTools\Config\Database;
use FullzTools\Admin\Orders;

$db = Database::getInstance();
$orders = new Orders();
```

### Public Pages
Access the application through public pages:
- Homepage: `/index.php`
- Login: `/login.php`
- Register: `/register.php`
- Shopping: `/buy.php`

### Admin Panel
Administrative functions are organized in the `Admin` namespace:
```php
use FullzTools\Admin\Users;

$userManager = new Users();
$userManager->index();
```

## Testing

### Run Tests
```bash
# Run all tests
composer test

# Run with coverage
composer test-coverage
```

### Test Structure
- **Unit Tests**: Test individual classes and methods in isolation
- **Integration Tests**: Test interaction between components
- **Functional Tests**: Test complete features end-to-end

## Development

### Adding New Features
1. Create classes in appropriate namespace directories
2. Follow PSR-4 naming conventions
3. Add tests in corresponding test directories
4. Update documentation

### Code Style
- Follow PSR-12 coding standards
- Use meaningful class and method names
- Add PHPDoc comments for all public methods
- Keep methods focused and concise

## Rationale for Structure

### Why This Structure?

1. **PSR-4 Compliance**: Enables automatic class loading and follows PHP community standards
2. **Scalability**: Clear separation makes it easy to add new features
3. **Maintainability**: Related functionality is grouped together
4. **Testing**: Parallel test structure mirrors source organization
5. **Security**: Public files are isolated from business logic
6. **Collaboration**: Standard structure is familiar to PHP developers

### Benefits

- **Easier Onboarding**: New developers can quickly understand the layout
- **Better IDE Support**: Namespaces and autoloading improve code completion
- **Dependency Management**: Composer handles all external dependencies
- **Version Control**: Clear structure makes code reviews easier
- **Deployment**: Organized structure simplifies deployment processes

## License

MIT License

## Contributing

1. Follow the established directory structure
2. Maintain PSR-4 namespace conventions
3. Write tests for new features
4. Update documentation as needed