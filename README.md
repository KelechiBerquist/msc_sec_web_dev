# Practical Web Solution (100%)
Individual work - development of a dynamic web solution using HTML5, CSS, PHP and MySQL.

## Scenario
You will create a prototype website for a fictional cinema booking system that will allow users to search for movies by different criteria and make a booking for the chosen movie.

<br>

## Design documents
First, design a homepage and the content pages for your cinema using wireframes with additional notes about layout and colour schemes.  You should include a link to your wireframe and notes document in the navigation area of the homepage.

<br>

## Static content
Develop a website with at least 8 webpages using HTML5, PHP, and CSS.  Implement page structures using HTML5 and add your own content (important: do not cut and paste from the Internet, although you may use images with attribution to the source).

<br>

A site-wide style sheet (external CSS file) should be used to specify the styles for the web pages within the web site.  The scripts used to create the website must be organised into folders as taught to simplify maintenance and promote code re-use.

<br>

The website should have an appropriate and professional looking interface. The primary focus should be on the end-user so the website must be developed according to best practice and legal compliance in accessibility, usability, and security.

<br>

Good design practice should be considered when creating the web pages, such as:
- Relevant general design principles with regard to use of colour, layout, consistency of design, ease of use etc.
- Ease of navigation
- Web accessibility
- Web security

<br>

## Web standards and validation
All web pages produced for the assignment must use HTML5 as the Doctype. You should make use of CSS classes and IDs as well as HTML selectors. All pages should validate without any HTML errors as reported by http://validator.w3.org/ for HTML5 and http://jigsaw.w3.org/css-validator/ for CSS.

<br>

## Database-driven content
The server-side scripting language that must be used is PHP.  A SQL script which creates three tables named movies, movie_bookings and customers has been provided for you on Blackboard (eLP) under the Assessments section. You should run this script on your MySQL database in PHPMyAdmin to create the tables.  You will also be provided with sample queries for populating the database tables on Blackboard.

<br>

You should then manually enter 12 movies of your choice into the movies table.  You may also add some customer details manually to the customers table if you cannot do this using a web form. You should only add to the movie_bookings table through the web form you will create.

<br>

Do not make any changes to the structure of the tables, i.e. do not change the columns or the table name, although you can add content as necessary.

## Pages required
1) An appropriately designed homepage/index page.

2) A customer registration page which allows you to insert a new customer’s details into the customers table using an HTML5 form to gather the customer data and PHP to connect to the MySQL database and insert the values.

3) A movie listing page which links to the movies table in your MySQL database using PHP and the contents of the movies table should be listed on the page in a suitable format.

4) A login page that will allow users to log onto and use the website. Users who cannot login, or who have logged out should not be able to access any page except the login page, the homepage and the movie listing page.

    i) A logged-in user also needs to be able to logout using a link in the navigation area.

5) A movie details page which will show the details for a single chosen movie.  There should be a link for customers to book this movie from this page.

6) A booking page containing a form where the user can book the chosen movie for a particular date and time and number of people.

7) An academic security report web page of 1000 words or fewer that critically reviews the site security measures, including features that could be added. This page requires academic journal and paper references and should be linked to the home page in the footer or navigation section.  References are excluded from the word count.

8) A credits page which is used to list any sources you have made use of in the creation of your website. Also if you have used source material from anywhere (pictures, buttons, quotes, or anything which is not your own work) you should acknowledge the source using the Harvard method of referencing.

<br>

Please credit all sources that you use for anything i.e. code, photos, graphics, logos, widgets, text etc. Please note that we are aware that there are sites on the Internet that provide code. We realise that the Internet coding community encourages sharing and re-use of code. The purpose of this assignment is to show us what YOU can do; not that you can copy somebody else's work.

<br>

## Detailed programming requirements

- The website must be hosted on newnumyspace in a folder called PE7045. It must not start in the root folder of the web server. This is for portability.

- Security issues as discussed in the module MUST be addressed. That is, you must provide a secure login system, all data should be appropriately validated and be protected against SQL injection and cross site-scripting attacks.
- PHP sessions should be used to provide application security. It should not be possible to access restricted pages once the owner has logged out.
- It is very useful if clear indications are given as to which source code file principally implements the required features. This will be done by including a page ‘features.txt’ that lists, using bullet points, the feature and the web page on which it is implemented.
- CSS should be used to separate style from content. Design oriented tags (e.g. `<font>, <b><i>`, etc) must not be used. Tables should only be used for tabular data not for page layout.
- Web page content used should be dynamic (if the data is stored in the database, it should be retrieved from there, not hard coded into the web page).
- Code comments should be used throughout all files.
- Code should be neatly indented for readability.
- Your code should be structured in such a way as to promote code re-use (for example, place code that is used on more than one page in a separate file to be imported into all web pages that need it. You should use PHP functions wherever appropriate).
- All images used on the website must be stored in the `./assets/images` folder, all stylesheets in the `./assets/stylesheets` folder.  PHP and HTML files should be stored in the `./content` folder.
- The integrity of the data should be maintained at all times.
- The use of HTML generation tools such as Adobe Dreamweaver, or other templates or files for either HTML or CSS not authored by you, is not permitted. Anyone who is found to have done so will receive 0 marks for this part of the assignment. We expect you to generate your HTML/CSS by hand, e.g. using Notepad++, Sublime Text, PHPStorm etc.
- Bootstrap is not permitted.
- You should test your web page using several web browsers and at different screen resolutions to make sure that it displays correctly.
- You must not use any other libraries or code not authored by you, for HTML, PHP, Javascript or CSS. You must not use .htaccess rewrite directives for this assignment.
- You must keep a complete backup (zip) file of your submitted web site

<br>

## Advice
- Please make sure you plan your code and the way different components will work together before you start writing any code.
- Make sure your code is indented and commented – your comments should be written first – writing pseudocode which become comments help make sure your code makes sense.
- Attempt all parts, it’s easier to get a few percent at the start of a question than get those last few percent trying to get a perfect solution to one part.  In short getting less than half marks for all parts is better than getting almost full marks on only one part.
