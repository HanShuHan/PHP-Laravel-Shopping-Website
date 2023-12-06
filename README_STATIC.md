# Shopping Website (Static/Inaccessible Version)
## Authors: Shuhan Han, Maha Fouda, Nnamdi Echegini, David Currey & Michaël Boisvenu-Landry

Build a fully static website that can be hosted for free on GitHub Pages. Site must contain a poorly accessible design in accordance to WCAGG. Backend-like functionality exists but is limited to the instance of the site running and is refreshed on a cache-clear, new tab, or hard refresh (i.e data stored on the site is not persistent between sessions although in some instances it may be).

### Features
- User registration
- User login
- Cart system
- Products divided by product category that can be added to the cart
- Products stored within project directory as JSON
- Editing of user profile
- Form validations
- Search functionality

### Accessibility Discrepencies
The site features the following poor accessibility designs:

#### Non-semantic HTML
Most elements are nested within `<div>`s and opt to not use appropriate semantic HTML counterparts. An example, the menu is nested in a `<div>` instead of a `<nav>` element.

#### Lack of <meta> tags
This site does not have appropriate `<meta>` tags for proper accessibility.

#### Generic <title> tag
Site uses same `<title>` tag throughout, leading to poor identification of web pages.

#### Bad colour contrast
Some components of the sate feature poor colour contrast

#### Generic colour usage
Some aspects of the site use poor colour choice. Examples are delete buttons being the same colour as text and other buttons, and validation messages being green instead of red.

#### No aria
The site does not use HTML aria properties at all.

#### No alt text on images
Some images do not use the HTML property 'alt'.

### Structure
This site has a pretty linear structure compared to the Server Version. Most HTML pages can be found in the root directory, and product pages can be found in the /products directory. The /js directory hosts the main JavaScript file (indexnew.js) as well as a locally hosted jQuery file. Likewise all the CSS used in the site can be found in the /css directory as index.css. Images used in the site are all located in the /image directory.

This site emulates back-end functionallity by primarily using `localStorage` feature of the browser and JavaScript, all functions