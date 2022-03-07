<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package Worpress
 * @subpackage Gallery
 * @since Gallery 1.0
 */


get_header(); ?>

<div class="wrap">
    <main role="main">
        <section>
            <header>
                <h2>Getting Started</h2>
                <nav role="navigation">
                    <ul>
                        <li><a href="#introduction">Introduction</a></li>
                        <li><a href="#instructions">Instructions</a></li>
                    </ul>
                </nav>
            </header>
            <article id="introduction">

            </article>
            <article id="instructions">
                <h3>Instructions</h3>

                <!-- Content -->
                <ol>
                    <li>Read the comments in this template</li>
                    <li>Decide how you think your content may fit into the template</li>
                    <li>Start building your document</li>
                </ol>

            </article>

        </section>

    </main>
    <aside role="complementary">

    </aside>

</div>
<?php get_footer(); ?>