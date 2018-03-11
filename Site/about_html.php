<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>HTML</title>
</head>
<body>
<div id="main">

    <?php
    include("menu.php");
    include("slider.php");
    ?>

    <div id="content1">
        <h1>HTML</h1>
        <p>
            <b>HyperText Markup Language</b>, commonly abbreviated as HTML, is the standard markup language used to
            create web
            pages. Along with CSS, and JavaScript, HTML is a cornerstone technology used to create web pages, as well
            as to create user interfaces for mobile and web applications. Web browsers can read HTML files and render
            them into visible or audible web pages. HTML describes the structure of a website semantically and, before
            the advent of Cascading Style Sheets (CSS), included cues for the presentation or appearance of the document
            (web page), making it a markup language, rather than a programming language.
            In 1980, physicist Tim Berners-Lee, then a contractor at CERN, proposed and prototyped ENQUIRE, a system for
            CERN researchers to use and share documents. In 1989, Berners-Lee wrote a memo proposing an Internet-based
            hypertext system.Berners-Lee specified HTML and wrote the browser and server software in late 1990. That
            year, Berners-Lee and CERN data systems engineer Robert Cailliau collaborated on a joint request for
            funding, but the project was not formally adopted by CERN. In his personal notes from 1990 he listed
            "some of the many areas in which hypertext is used" and put an encyclopedia first.

            The first publicly available description of HTML was a document called "HTML Tags", first mentioned on the
            Internet by Tim Berners-Lee in late 1991.It describes 18 elements comprising the initial, relatively
            simple design of HTML. Except for the hyperlink tag, these were strongly influenced by SGMLguid, an in-house
            Standard Generalized Markup Language (SGML)-based documentation format at CERN. Eleven of these elements
            still exist in HTML 4.

            HTML is a markup language that web browsers use to interpret and compose text, images, and other material
            into visual or audible web pages. Default characteristics for every item of HTML markup are defined in the
            browser, and these characteristics can be altered or enhanced by the web page designer's additional use of
            CSS. Many of the text elements are found in the 1988 ISO technical report TR 9537 Techniques for using SGML,
            which in turn covers the features of early text formatting languages such as that used by the RUNOFF command
            developed in the early 1960s for the CTSS (Compatible Time-Sharing System) operating system: these
            formatting commands were derived from the commands used by typesetters to manually format documents.
            However, the SGML concept of generalized markup is based on elements (nested annotated ranges with
            attributes) rather than merely print effects, with also the separation of structure and markup; HTML has
            been progressively moved in this direction with CSS.

            Berners-Lee considered HTML to be an application of SGML. It was formally defined as such by the Internet
            Engineering Task Force (IETF) with the mid-1993 publication of the first proposal for an HTML specification:
            "Hypertext Markup Language (HTML)" Internet-Draft by Berners-Lee and Dan Connolly, which included an SGML
            Document Type Definition to define the grammar.[9] The draft expired after six months, but was notable for
            its acknowledgment of the NCSA Mosaic browser's custom tag for embedding in-line images, reflecting the
            IETF's philosophy of basing standards on successful prototypes.Similarly, Dave Raggett's competing
            Internet-Draft, "HTML+ (Hypertext Markup Format)", from late 1993, suggested standardizing
            already-implemented features like tables and fill-out forms.


            Further development under the auspices of the IETF was stalled by competing interests. Since 1996, the HTML
            specifications have been maintained, with input from commercial software vendors, by the World Wide Web
            Consortium (W3C). However, in 2000, HTML also became an international standard (ISO/IEC 15445:2000).
            HTML 4.01 was published in late 1999, with further errata published through 2001. In 2004, development began
            on HTML5 in the Web Hypertext Application Technology Working Group (WHATWG), which became a joint
            deliverable with the W3C in 2008, and completed and standardized on 28 October 2014.

        </p>

    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>