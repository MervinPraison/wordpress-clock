=== WordPress Clock ===
Contributors: mervinpraison
Donate link: https://mer.vin
Tags: clock, widget, shortcode, analog, digital
Requires at least: 4.0
Tested up to: 6.8
Stable tag: 2.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display a modern, responsive analog or digital clock on your WordPress site using shortcode or widget.

== Description ==

WordPress Clock provides a beautiful, modern clock display for your website. Choose between analog and digital styles, customize the size, and display it anywhere using a shortcode or widget.

**Key Features:**

* 🕐 **Analog Clock** - Beautiful circular clock with smooth animations
* 🔢 **Digital Clock** - Modern digital display with date
* 📱 **Fully Responsive** - Works perfectly on all devices
* 🎨 **Modern Design** - Gradient backgrounds and smooth animations
* ⚡ **No Flash** - Pure JavaScript and CSS (Flash removed in v2.0)
* 🔒 **Secure** - All output properly escaped and sanitized
* 🌐 **Translation Ready** - Full i18n support
* ⚙️ **Easy Customization** - Adjustable size and type

**Usage:**

* **Shortcode:** `[wpclock]` - Default analog clock
* **Shortcode Options:** `[wpclock type="digital" size="300"]`
* **Widget:** Drag and drop from Appearance > Widgets
* **PHP Function:** `<?php echo do_shortcode('[wpclock]'); ?>`

== Installation ==

1. Upload the `wordpress-clock` folder to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the shortcode `[wpclock]` in any post or page
4. Or add the widget from Appearance > Widgets

== Frequently Asked Questions ==

= What is the shortcode? =

Use `[wpclock]` for a default analog clock, or customize it:
* `[wpclock type="analog" size="200"]` - Analog clock, 200px
* `[wpclock type="digital" size="300"]` - Digital clock, 300px

= How do I add it as a widget? =

1. Go to Appearance > Widgets
2. Find "WordPress Clock" widget
3. Drag it to your desired sidebar
4. Configure the title, type, and size
5. Save

= Can I customize the colors? =

Yes! Add custom CSS to your theme:

```css
.wpclock-face {
    background: linear-gradient(135deg, #your-color1, #your-color2);
}
```

= Does it work without Flash? =

Yes! Version 2.0 completely removed Flash and uses modern JavaScript and CSS3.

= Is it mobile responsive? =

Absolutely! The clock automatically adjusts to different screen sizes.

== Screenshots ==

1. Analog clock display
2. Digital clock display
3. Widget configuration
4. Shortcode usage

== Changelog ==

= 2.0 =
* **MAJOR UPDATE:** Complete rewrite from scratch
* Security: Removed Flash dependency (security risk)
* Security: Added proper input sanitization and output escaping
* Security: Updated to modern WordPress widget API
* Improved: Pure JavaScript and CSS3 implementation
* Improved: Responsive design for all devices
* Improved: Smooth animations for analog clock
* Improved: Digital clock with date display
* Improved: Modern gradient design
* Improved: Widget with customization options
* Improved: Shortcode with type and size parameters
* Improved: Translation ready with text domain
* Improved: WordPress 6.8 compatibility
* Fixed: Plugin name typo (Worpress → WordPress)
* Fixed: Deprecated widget registration method
* Fixed: Hardcoded HTTP URLs
* Fixed: External CDN dependency removed

= 1.1 =
* Minor fixes

= 1.0 =
* Initial release with Flash clock

== Upgrade Notice ==

= 2.0 =
CRITICAL UPDATE: Flash removed for security. Complete rewrite with modern JavaScript. All users must update immediately.

= 1.1 =
Minor bug fixes

= 1.0 =
Initial release
