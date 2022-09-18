# Add-Top-Bar-to-Sticky-Header-Effects
Wordpress plugin to integrate with Sticky Header Effects to animate a top bar smoothly with the main header.

<a name="readme-top"></a>
<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#license">License</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This plugin intends to integrate with Elementor and Elementor Sticky Header Effects to create a header with animated top bar.

* The top bar smoothly animates up when the user scrolls down the page
* The main header navigation is fixed and shrinks




### Built With

This section should list any major frameworks/libraries used to bootstrap your project. Leave any add-ons/plugins for the acknowledgements section. Here are a few examples.

* PHP
* Javascript
* CSS
* Wordpress

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

### Installation

1. Install Elementor
2. Install Elementor Header & Footer Builder
3. Install Sticky Header Effects for Elementor
4. Download zip file of Add Top Bar to Sticky Header Effects plugin

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

1. In Elementor Header & Footer Builder create a top bar section. Under it create a main header section.
2. Give top bar id of #top-bar. Sticky header effects should be off.
3. Give main header id of #cl-web-header. Sticky header effects on with shrink header and shrink logo on.
4. In the js file, change the number in (window.scrollY >= 60), to match Sticky Header Effects scroll distance value.
   ```sh
   if (window.scrollY >= <Sticky Header Effects scroll distance value>) { ...
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>
