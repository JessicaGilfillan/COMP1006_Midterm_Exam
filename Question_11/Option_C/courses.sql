USE /* Add DB Name Here */

CREATE TABLE `courses` (
  `course_code` int(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_description` varchar(1000) NOT NULL,
  `course_format` varchar(100) NOT NULL
);


INSERT INTO `courses` (`course_code`, `course_name`, `course_description`, `course_format`) VALUES
(1006, 'Intro to Web Programming Using PHP ', 'While building foundational programming knowledge and skills for application development on the Internet, students learn about the Web as a development platform through the use of popular representative languages such as PHP. Students learn to plan, design, construct, and integrate basic server-side components of modern Web applications, including forms and databases.', 'remote delivery'),
(1011, 'Adv Object Oriented Prog-Java', 'Building on the concepts from Introduction to Object-Oriented Programming, students utilize techniques that enable the creation of more sophisticated and complex applications. Students explore deeper applications for the Java programming languages, such as mobile applications and Graphical User Interface (GUI) design and construction.', 'remote delivery '),
(1030, 'Programming Fundamentals', 'Students gain a broad understanding of modern computer programming, acquiring introductory skills in problem analysis, solution design, and program construction with this key foundational course. Through practical programming activities, students gain an appreciation of the nature and history of computer programming.', 'remote delivery '),
(1054, ' Interface Design Using CSS', 'Design principles meet Web standards and æsthetic challenges in this practical interface design course. Topics covered include advanced CSS selectors, CSS normalization, page layout techniques, interactive interface elements, colour, typography, and a variety of CSS-based visual effects. Responsive design fundamentals that address a variety of screen-rendering contexts are also addressed.', 'remote delivery '),
(1073, 'Client-side JavaScript', 'The use of client-side scripting to implement interactive behaviour within the browser environment is an important part of modern web applications. Standard client-side scripting syntax, operations, conditional statements, loops, functions, methods, and objects are examined. Students learn to manipulate the standard Document Object Model (DOM), by modifying the structure (HTML) and the appearance (CSS) of Web pages and/or interfaces for the purposes of improving the user experience.', 'remote delivery'),
(1112, 'Document Automation Using Python', 'In this course, students learn how to use Python programming language to solve common programming problems that involve the automation of tasks, such as reading and manipulating word processing files, spreadsheets and web data, as well as scheduling tasks and launching programs.', 'remote delivery ');

ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`);