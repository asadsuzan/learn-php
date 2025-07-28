<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esc wp functions </title>
</head>
<body>
    
<h1>esc_* () function are used to sanitize user generated content before outputting it to the browser</h1>

<p>common esc_* functions are bellow</p>
<ul>
    <li>esc_html("title") -   plain html text</li>
    <li>esc_attr($title) - html attributes values in html </li>
    <li>esc_url () - sanitize link and url </li>
    <li>esc_textarea() - used inside textarea </li>
</ul>



<h1>wp_kses() - is used for eliminate disallowed html from content eg:</h1>

<pre>
    $input = "<"a" href="#">link</"a"><"script">alert("dangerous script tag")</"script">"
    $allowed = ["a"=>["href"=>true]] //  allow only a tag
    echo wp_kses($input, $allowed)
</pre>

<h1>wp_enqueue_script() / wp_enqueue_style()</h1>
<p>✅ What:
Registers and loads CSS and JS files the WordPress way.

✅ Why:
Avoids duplication, follows best practices, works with caching and plugins.</p>
<pre>
    function load_assets() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
  wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'load_assets');
</pre>


<h1> 4. print, var_dump(), print_r() — Output & Debug</h1>
<p>✅ What:
Used to display values during development.

✅ Why:
To inspect what a variable holds.

✅ Examples: </p>
<pre>$name = "Suzan";
print $name;

$arr = ['a' => 1, 'b' => 2];
print_r($arr);    // Easy to read
var_dump($arr);   // Shows types + values
</pre>


<h1>5. define() and const — Constants</h1>
<p>✅ What:
Used to create unchangeable values in your app.

✅ Why:
Good for settings like version numbers, API keys, etc.

✅ Examples:</p>
<pre>define('SITE_NAME', 'Asad Suzan Portfolio');
const AUTHOR = 'Suzan';

echo SITE_NAME; // "Asad Suzan Portfolio"
</pre>


<h1>6. class, $this, __construct — OOP Basics</h1>
<p>✅ What:
Object-oriented programming (OOP) in PHP.

✅ Why:
Helps structure your code better (useful for plugins/themes).

✅ Example:</p>
<pre>class Car {
  public $brand;

  public function __construct($brand) {
    $this->brand = $brand;
  }

  public function getBrand() {
    return $this->brand;
  }
}

$car = new Car('Toyota');
echo $car->getBrand(); // Output: Toyota


Concept	Meaning
class	Blueprint for an object
$this	Refers to current instance
__construct	Auto-called when object is created
</pre>


<h1>🔹 7. require, require_once, include</h1>
<p>✅ What:
Used to import other PHP files.

✅ Why:
Split your code for better reusability and cleaner structure.</p>
<pre>
    | Function       | Stops if file not found | Loads Once |
| -------------- | ----------------------- | ---------- |
| `require`      | ✅ Yes                   | ❌ No       |
| `require_once` | ✅ Yes                   | ✅ Yes      |
| `include`      | ❌ Only gives a warning  | ❌ No       |

✅ Example: 

require 'header.php';        // Load always
require_once 'config.php';   // Load only once
include 'footer.php';        // Safe optional load

</pre>

<h1>🔹 8. !function_exists() — Avoid Redeclaration</h1>
<p>✅ What:
Checks if a function is already defined.

✅ Why:
To prevent “Cannot redeclare function” fatal errors in plugins/themes.

✅ Example:</p>
<pre>if ( ! function_exists('say_hello') ) {
  function say_hello() {
    echo "Hello, Suzan!";
  }
}

Used a lot in plugins or theme functions.php files.
</pre>



<h1>✅ Summary Table</h1>
<pre>
    | Topic                  | Purpose                         | Example Function              |
| ---------------------- | ------------------------------- | ----------------------------- |
| `esc_*()`              | Escape output safely            | `esc_html()`, `esc_attr()`    |
| `wp_kses_*()`          | Allow safe HTML                 | `wp_kses()`, `wp_kses_post()` |
| `*_enqueue_*()`        | Load CSS/JS in WordPress        | `wp_enqueue_style()`          |
| `print`, `var_dump()`  | Debugging                       | `var_dump($var)`              |
| `define()`, `const`    | Unchangeable values             | `define('NAME', 'Suzan')`     |
| `class`, `__construct` | OOP for reusability             | `class Car {...}`             |
| `require`, `include`   | Load PHP files                  | `require 'file.php'`          |
| `!function_exists()`   | Avoid duplicate function errors | `if (!function_exists(...))`  |

</pre>
</body>
</html>