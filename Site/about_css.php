<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CSS</title>
</head>
<body>
<div id="main">

    <?php
    include("menu.php");
    include("slider.php");
    ?>

    <div id="content1">
        <h1>CSS</h1>
        <p>
            <b>Cascading Style Sheets</b> (CSS) is a style sheet language used for describing the presentation of a
            document
            written in a markup language. Although most often used to set the visual style of web pages and user
            interfaces written in HTML and XHTML, the language can be applied to any XML document, including plain XML,
            SVG and XUL, and is applicable to rendering in speech, or on other media. Along with HTML and JavaScript,
            CSS is a cornerstone technology used by most websites to create visually engaging webpages, user interfaces
            for web applications, and user interfaces for many mobile applications.

            CSS is designed primarily to enable the separation of document content from document presentation, including
            aspects such as the layout, colors, and fonts.This separation can improve content accessibility, provide
            more flexibility and control in the specification of presentation characteristics, enable multiple HTML
            pages to share formatting by specifying the relevant CSS in a separate .css file, and reduce complexity and
            repetition in the structural content.

            This separation of formatting and content makes it possible to present the same markup page in different
            styles for different rendering methods, such as on-screen, in print, by voice (when read out by a
            speech-based browser or screen reader) and on Braille-based, tactile devices. It can also be used to display
            the web page differently depending on the screen size or device on which it is being viewed. Readers can
            also specify a different style sheet, such as a CSS file stored on their own computer, to override the one
            the author has specified.

            Changes to the graphic design of a document (or hundreds of documents) can be applied quickly and easily, by
            editing a few lines in the CSS file they use, rather than by changing markup in the documents.

            The CSS specification describes a priority scheme to determine which style rules apply if more than one rule
            matches against a particular element. In this so-called cascade, priorities (or weights) are calculated and
            assigned to rules, so that the results are predictable.
            CSS information can be provided from various sources. These sources can be the web browser, the user and the
            author. The information from the author can be further classified into inline, media type, importance,
            selector specificity, rule order, inheritance and property definition. CSS style information can be in a
            separate document or it can be embedded into an HTML document. Multiple style sheets can be imported.
            Different styles can be applied depending on the output device being used; for example, the screen version
            can be quite different from the printed version, so that authors can tailor the presentation appropriately
            for each medium.

            One of the goals of CSS is to allow users greater control over presentation. Someone who finds red italic
            headings difficult to read may apply a different style sheet. Depending on the browser and the web site, a
            user may choose from various style sheets provided by the designers, or may remove all added styles and view
            the site using the browser's default styling, or may override just the red italic heading style without
            altering other attributes.
            CSS was first proposed by Håkon Wium Lie on October 10, 1994. At the time, Lie was working with Tim
            Berners-Lee at CERN. Several other style sheet languages for the web were proposed around the same time,
            and discussions on public mailing lists and inside World Wide Web Consortium resulted in the first W3C CSS
            Recommendation (CSS1)being released in 1996. In particular, Bert Bos' proposal was influential; he
            became co-author of CSS1 and is regarded as co-creator of CSS.

            Style sheets have existed in one form or another since the beginnings of Standard Generalized Markup
            Language (SGML) in the 1980s, and CSS was developed to provide style sheets for the web. One requirement
            for a web style sheet language was for style sheets to come from different sources on the web. Therefore,
            existing style sheet languages like DSSSL and FOSI were not suitable. CSS, on the other hand, allowed a
            document's style to be influenced by multiple style sheets by way of "cascading".

        </p>

    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>