<?php include "header.php" ?>

    <div class="page" id="gmf">
        <div class="container portfolio-gmf">
          <h1>The Stack</h1>
          <div class="grid tech">
              <!-- HTML Grid -->
              <div class="grid-1-3" id="0">
                  <div>
                      <img src="img/tech-logos/html.svg">
                      <p>Utilized HTML5 and followed WCAG guidelines to markup sites for accessibility for our Canada properties</p>
                  </div>
              </div>
              <!-- CSS Grid -->
              <div class="grid-1-3" id="1">
                  <div>
                      <img src="img/tech-logos/css.svg">
                      <p>Approximately 10,000 lines of CSS code were written or modified during the course of the project</p>
                  </div>
              </div>
              <!-- Javascript grid -->
              <div class="grid-1-3" id="2">
                  <div>
                      <img src="img/tech-logos/javascript.svg">
                      <p>Javascript provided our front-end solution for logic for various elements</p>
                  </div>
              </div>
              <div class="grid-1-3" id="2">
                  <div>
                      <img src="img/tech-logos/jquery.svg">
                      <p>The JQuery library was used to provide front-end animations and scripting solutions</p>
                  </div>
              </div>
              <div class="grid-1-3" id="2">
                  <div>
                      <img src="img/tech-logos/visual-studio.svg">
                      <p>Utilize TFS in conjuction with Visual Studio to manage the team's collaborative effort</p>
                  </div>
              </div>
          </div>
        </div>
        <div class="container portfolio-gmf">
            <h1>The Challenge</h1>
            <img class='case-img right' src="img/portfolio/oca-small.jpg" alt="GM Financial Online Credit Application"/>
            <p>The GM Financial site redesign offered a unique challenge. I was fresh out of college and
              excited to undertake my first professional project. Within a month of being hired at GM Financial,
              the two team members above me left for other job opportunities, leaving me as the most senior member
              of the team, with only a month's experience.</p>
            <p>As a greenhorn in the industry, with management and the other freshly hired developers looking for
              leadership within the team, I decided to try my hand taking charge, despite my nervousness. Under
              ordinary circumstances, the pressure of just leading the redesign of a site that gets over two million
              visitors a month would be enough, but there was another constraint to the project: time.</p>
            <p>There was a redesign of our MyAccount platform in the pipeline as well, being developed by a third-party
              vendor. Their update was set to go live in two months, and we had have our redesign ready for production
              within the same timeframe. We had two months to redesign and develop five sites, as well as do <thead>
              QA testing for each.</p>
              </thead>
        </div>
        <div class="container portfolio-gmf">
            <h1>Timeline</h1>
            <h2>Week 1</h2>
            <p>Our first week on the project was mainly devoted to making design and development decisions. We had
              to decide whether to keep the current, ancient codebase or start fresh. If we had more time, we
              would have elected to just scrap the current codebase. The CSS was horribly maintained and a huge mess, and the HTML markup wasn't much better,
              but with just a little over a month to completely redesign five sites, starting fresh wasn't an option.
              There just wouldn't be enough time. </p>
            <p>We had to make decisions on a number of other issues, such as how deployment would
              be handled, what styles we would need to adhere to meet WCAG compliance, .</p>
            <p>Basic development began towards the end of the week. </p>
            <hr />
            <h2>Week 2</h2>
            <p>The second week was a blur as we buried our heads in our keyboards to try and get a head start on
              development. Since the third part already had a style guide created for the MyAccount portal, we
              were able to utilize that for a basic framework for development. </p>
            <p>We decided to focus on our US Consumer site first (gmfinancial.com) and then, time-permitting, port
              the redesign to the rest of the properties. We were beginning to feel the pressure of the timeline,
              as we were only about halfway through the US Consumer redesign after two weeks. It was going to be a
              tight deadline.</p>
            <hr />
            <h2>Week 3</h2>
            <p>Week three was much of the same as week two. Things were hectic and we developed at a rapid pace.</p>
            <hr />
            <h2>Week 4</h2>
            <hr />
            <h2>Week 5</h2>
            <hr />
            <h2>Week 6-8</h2>
            <p>The final stretch of time was almost entirely devoted to QA testing. Our QA team got to work
              checking the site for any errors and inconsistencies, trying to break it in any way possible.</p>
            <p>We must have closed out over a hundred defect tickets in this time, ranging from a minor style
              inconsistency to an entire login field hidden away in the site breaking. It was a whirlwind
              of work, but the feeling of satisfaction I had from finally closing the last one out was one
              I haven't experienced before.</p>
            </style>
        </div>
        <div class="container portfolio-gmf">
          <h1>Rebuild or Revamp?</h1>
          <p>The toughest decision we had to make as a team was to either start fresh with a completely clean
            codebase or to build and refine the one we had inherited. A lot of time and consideration went into
            this decision, since it would affect the timeline of the project completion.</p>
          <p>Our inherited codebase was fairly messy and unwieldy. Maintenance was an issue because of conflicting class
            styles and orphaned code. There was no naming convention in use, so classes were kind of haphazardly named. One
            would be abbreviated and short (.blk-btn), and the next was basically a hyphenated sentence (.leadership-team-page-container-mod-extended).
            There were also a number of odd classes mixed with markup that just simply made no sense, from either an SEO or maintainability standpoint
            (h1.like-h3, h2.like-h1). With over 10,000 lines of CSS like this, needless to say it would take a fair bit of </p>
          <p>The argument boiled down to time.
        </div>
    </div>

    <div class="arrow-down">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="30px" height="20px" viewBox="0 0 500 300" enable-background="new 0 0 500 300" xml:space="preserve">
        <polyline fill="none" stroke="#92808b" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
            52.203,57 250,254.975 448.5,57 "/>
      </svg>
      <p>Scroll</p>
    </div>

<?php include "footer.php" ?>
