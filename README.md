# WordPress Clock - WordPress Plugin

[![WordPress Plugin Version](https://img.shields.io/badge/version-2.0-blue.svg)](https://wordpress.org/plugins/wordpress-clock/)
[![WordPress Tested](https://img.shields.io/badge/WordPress-6.8-green.svg)](https://wordpress.org/)
[![License](https://img.shields.io/badge/license-GPLv2%20or%20later-orange.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

Display a beautiful, modern analog or digital clock on your WordPress website. No Flash, pure JavaScript and CSS3.

## 🌟 Features

- ✅ **Analog Clock** - Smooth, animated circular clock with hour, minute, and second hands
- ✅ **Digital Clock** - Modern digital display with time and date
- ✅ **No Flash** - Completely rewritten in JavaScript and CSS3 (Flash removed for security)
- ✅ **Responsive Design** - Works perfectly on all devices and screen sizes
- ✅ **Widget Support** - Easy drag-and-drop widget with customization
- ✅ **Shortcode** - Simple `[wpclock]` shortcode with parameters
- ✅ **Customizable** - Adjustable size and clock type
- ✅ **Modern Design** - Beautiful gradient backgrounds and smooth animations
- ✅ **Secure** - All output properly escaped, input sanitized
- ✅ **Translation Ready** - Full internationalization support
- ✅ **WordPress 6.8 Compatible** - Fully tested and updated

## 📦 Installation

### From WordPress.org

1. Go to **Plugins → Add New**
2. Search for "WordPress Clock"
3. Click **Install Now** and then **Activate**

### Manual Installation

1. Download the plugin zip file
2. Extract the contents
3. Upload the `wordpress-clock` folder to `/wp-content/plugins/`
4. Activate the plugin through the **Plugins** menu in WordPress

### From GitHub

```bash
cd wp-content/plugins/
git clone https://github.com/MervinPraison/wordpress-clock.git
```

## 🚀 Usage

### Shortcode

#### Basic Usage

Display a default analog clock:

```
[wpclock]
```

#### With Parameters

Customize the clock type and size:

```
[wpclock type="analog" size="200"]
```

```
[wpclock type="digital" size="300"]
```

**Shortcode Parameters:**

- `type` - Clock type: `analog` or `digital` (default: `analog`)
- `size` - Clock size in pixels (default: `200`, min: `100`, max: `500`)
- `timezone` - Timezone (optional, uses browser's local time by default)

### Widget

1. Go to **Appearance → Widgets**
2. Find **WordPress Clock** widget
3. Drag it to your desired sidebar
4. Configure:
   - **Title** - Widget title (optional)
   - **Clock Type** - Analog or Digital
   - **Size** - Clock size in pixels
5. Click **Save**

### PHP Function

Use in your theme template:

```php
<?php echo do_shortcode('[wpclock]'); ?>
```

Or with parameters:

```php
<?php echo do_shortcode('[wpclock type="digital" size="250"]'); ?>
```

## 📋 Requirements

- **WordPress:** 4.0 or higher
- **PHP:** 5.6 or higher (7.4+ recommended)
- **Modern Browser:** Supports CSS3 and JavaScript

## 🔒 Security Features

### Version 2.0 Security Improvements

- ✅ **Flash Removed** - Eliminated Flash dependency (major security risk)
- ✅ **Input Sanitization** - All user input properly sanitized
- ✅ **Output Escaping** - All output properly escaped
- ✅ **Modern Widget API** - Updated from deprecated `wp_register_sidebar_widget()`
- ✅ **No External Dependencies** - Removed external CDN (jQuery Tools)
- ✅ **HTTPS URLs** - All URLs updated to HTTPS
- ✅ **Nonce Verification** - Widget forms properly secured

## 📝 Changelog

### Version 2.0 (2025-01-10)

**MAJOR UPDATE - Complete Rewrite:**

**Security Fixes:**
- Removed Flash dependency (critical security risk)
- Removed external CDN dependency
- Added proper input sanitization
- Added output escaping
- Updated to modern WordPress widget API
- Changed all HTTP URLs to HTTPS

**New Features:**
- Pure JavaScript and CSS3 implementation
- Analog clock with smooth animations
- Digital clock with date display
- Responsive design for all devices
- Widget customization options
- Shortcode parameters (type, size, timezone)

**Improvements:**
- Modern gradient design
- Smooth second-hand animation
- Translation ready with text domain
- WordPress 6.8 compatibility
- Fixed plugin name typo (Worpress → WordPress)
- Better code organization

### Version 1.1
- Minor fixes

### Version 1.0
- Initial release with Flash clock

## 🎨 Customization

### Custom Colors

Add custom CSS to your theme to change colors:

```css
/* Analog Clock */
.wpclock-face {
    background: linear-gradient(135deg, #FF6B6B 0%, #4ECDC4 100%);
    border-color: #333;
}

.wpclock-hour-hand,
.wpclock-minute-hand {
    background: #333;
}

.wpclock-second-hand {
    background: #FF6B6B;
}

/* Digital Clock */
.wpclock-digital {
    background: linear-gradient(135deg, #2C3E50 0%, #3498DB 100%);
    color: #ECF0F1;
}
```

### Custom Size

Override the default size with CSS:

```css
.wpclock-container {
    width: 300px !important;
    height: 300px !important;
}
```

### Hide Date in Digital Clock

```css
.wpclock-date {
    display: none;
}
```

## 💡 Examples

### Sidebar Clock

Add to your sidebar widget area for a live clock display.

### Post/Page Clock

```
Check the current time: [wpclock type="digital" size="250"]
```

### Multiple Clocks

Display different clock types on the same page:

```
Analog: [wpclock type="analog" size="200"]
Digital: [wpclock type="digital" size="200"]
```

### Large Display Clock

```
[wpclock type="digital" size="400"]
```

## 🐛 Bug Reports & Feature Requests

Found a bug or have a feature request?

- **GitHub Issues:** [Report here](https://github.com/MervinPraison/wordpress-clock/issues)
- **WordPress.org Support:** [Support Forum](https://wordpress.org/support/plugin/wordpress-clock/)

## 👨‍💻 Development

### Repository Structure

```
wordpress-clock/
├── wp-clock.php          # Main plugin file
├── readme.txt            # WordPress.org readme
├── README.md             # This file
├── css/
│   └── clock.css         # Clock styles
├── js/
│   └── clock.js          # Clock JavaScript
├── swf/                  # Deprecated (Flash files - not used in v2.0)
└── screenshot-1.png      # Plugin screenshot
```

### Technology Stack

- **PHP** - WordPress plugin structure
- **JavaScript** - Clock logic and animations
- **CSS3** - Modern styling and gradients
- **HTML5** - Semantic markup

### Contributing

Contributions are welcome! Please:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 🔄 Migration from v1.x

If you're upgrading from version 1.x (Flash-based):

1. **Automatic:** Simply update the plugin - no configuration needed
2. **Widgets:** Existing widgets will continue to work but won't have new options until reconfigured
3. **Shortcodes:** All existing `[wpclock]` shortcodes will automatically use the new analog clock
4. **Flash Files:** The `/swf/` folder is kept for backward compatibility but is not used

## ⚠️ Important Notes

### Flash Deprecation

Version 2.0 completely removes Flash dependency. Flash is:
- No longer supported by browsers
- A major security risk
- Deprecated technology

The new version uses modern web technologies (JavaScript and CSS3) for better:
- Security
- Performance
- Compatibility
- Accessibility

### Browser Compatibility

Works in all modern browsers:
- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ✅ Opera 76+

## 📄 License

This plugin is licensed under the GPLv2 or later.

```
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
```

## 👤 Author

**Mervin Praison**
- Website: [mer.vin](https://mer.vin)
- GitHub: [@MervinPraison](https://github.com/MervinPraison)
- WordPress.org: [mervinpraison](https://profiles.wordpress.org/mervinpraison/)

## 🔗 Links

- **WordPress.org:** https://wordpress.org/plugins/wordpress-clock/
- **GitHub Repository:** https://github.com/MervinPraison/wordpress-clock
- **Support Forum:** https://wordpress.org/support/plugin/wordpress-clock/
- **Author Website:** https://mer.vin

## ⭐ Support

If you find this plugin useful, please consider:

- ⭐ [Leaving a review](https://wordpress.org/support/plugin/wordpress-clock/reviews/)
- 🐛 [Reporting bugs](https://github.com/MervinPraison/wordpress-clock/issues)
- 💡 [Suggesting features](https://github.com/MervinPraison/wordpress-clock/issues)
- 💰 [Making a donation](https://mer.vin)

## 📸 Screenshots

### Analog Clock
Beautiful circular clock with smooth animations

### Digital Clock
Modern digital display with date

### Widget Configuration
Easy-to-use widget settings

---

## 📅 Plugin History

**Original Release Date:** January 13, 2012  
**First Published:** WordPress.org Plugin Directory  
**Total Years Active:** 13+ years

---

**Made with ❤️ for the WordPress community**
