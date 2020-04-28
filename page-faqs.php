<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <h1 class="main-section-heading"><?php the_title(); ?></h1>
        <?php if (the_content()) { ?>
          <div class="main-section-copy"><?php the_content(); ?></div>
        <?php } ?>
      </div>
      <div class="main-section">
        <div class="faqs">
          <details class="faq">
            <summary class="question">Where does the Rotaract Club of Birmingham meet?</summary>
            <div class="answer">
              <p>The Club meets at The Harbert Center, the premier downtown Birmingham location for corporate, civic and social events. In the early 1980's, members of area civic clubs recognized the need for a facility which would provide office space and become a permanent meeting location for civic organizations. Hall W. Thompson and John M. Harbert, III spearheaded the effort to seek donations and plan construction of the facility. Building The Harbert Center became a community project as the members of the Rotary Club of Birmingham, Kiwanis Club of Birmingham and the Monday Morning Quarterback Club jointly raised the funds needed to complete the construction and furnishing of the building. The continuing contributions of members of these organizations, as well as Sunrise Rotary and the Downtown Exchange Club, ensure the long-term upkeep of the building and its furnishings. Named to honor John M. Harbert, III for his involvement in the project, The Harbert Center opened on June 16, 1986. Since that time, The Harbert Center has been the home of a number of civic and professional organizations, and has hosted many memorable community events. Events as diverse as meetings, wedding receptions, awards ceremonies, bar mitzvahs and retirement dinners are often held at <a href="https://www.theharbertcenter.com/home/" target="_blank" rel="noopener">The Harbert Center</a>.</p>
            </div>
          </details>
          <details class="faq">
            <summary class="question">How often does the Rotaract Club of Birmingham meet?</summary>
            <div class="answer">
              <p>Lunch meetings are held the first and third Thursday of each month from 11:45AM to 1:00PM featuring a speaker who is a leader in business, government, community or other notable endeavors.</p>
            </div>
          </details>
          <details class="faq">
            <summary class="question">How much are your Club dues?</summary>
            <div class="answer">
              <p>Annual dues are $350. These dues cover all lunch meeting meals, provide full or partial subsidy for fellowship events and also cover Club operating and administration expenses. In addition to the annual dues, members also are required to make a $20 annual contribution to Rotaract Club of Birmingham Foundation and purchase a pair of tickets to the Club's annual fundraising gala at approximately $100. New members pay a $25 initiation fee and a $25 Foundation contribution.</p>
            </div>
          </details>
          <details class="faq">
            <summary class="question">What is the age requirement of the Club?</summary>
            <div class="answer">
              <p>Prospective members must be between the ages of 21 to 30 at the time their application is submitted to be considered for membership. Members can stay active until the Rotary year in which they turn 35. The Club allows members to remain active over the age of 30 for two main reasons. First, many of our members do not want to leave the Club after they turn 30 due to the strong relationships they have developed with other Club members. Secondly, many of the Rotary Clubs in Birmingham typically do not offer membership to members as young as 30. We feel that allowing members to stay active until 35 provides an opportunity to mentor younger members of Rotaract and hopefully provide time to transition into a local Rotary Club.</p>
            </div>
          </details>
          <details class="faq">
            <summary class="question">How many members does your Club have? What percentage is male? Female?</summary>
            <div class="answer">
              <p>The Rotaract Club of Birmingham has 300 members, evenly distributed among male and female members.</p>
            </div>
          </details>
          <details class="faq">
            <summary class="question">What is the average age of your Club member?</summary>
            <div class="answer">
              <p>29 years old</p>
            </div>
          </details>
          <details class="faq">
            <summary class="question">What is the composition of membership employment represented in your Club?</summary>
            <div class="answer">
              <ul>
                <li>Finance (22%)</li>
                <li>Legal (13%)</li>
                <li>Real Estate (10%)</li>
                <li>Insurance (7%)</li>
                <li>Accounting (7%)</li>
                <li>Sales (15%)</li>
                <li>Non-profit (6%)</li>
                <li>Public Utilities (5%)</li>
                <li>Business Development (4%)</li>
                <li>Public Relations (3%)</li>
                <li>Education (6%)</li>
                <li>Marketing (2%)</li>
                <li>Information Technology (2%)</li>
                <li>Healthcare (2%)</li>
                <li>Engineering (2%)</li>
                <li>Architecture (1%)</li>
                <li>Construction (1%)</li>
                <li>Politics (1%)</li>
                <li>Print Media (0.5%)</li>
                <li>Interior Design (0.5%)</li>
                <li>Television (0.5%)</li>
              </ul>
            </div>
          </details>
          <details class="faq">
            <summary class="question">Does your Club receive financial support from your sponsoring Rotary Club?</summary>
            <div class="answer">
              <p>Yes, the Rotary Club of Birmingham generally provides some funds to cover costs associated with sending the incoming Rotaract President to the Rotaract Preconvention Meeting and Rotary International Convention. The Rotary Club also offers reduced cost to Rotaract members for joint fellowship events between the Clubs. The Rotary Club also provides comped lunches to all current Rotaract Board members and 10 at-large members every luncheon. To help start our Club, the Rotary Club provided the full cost of an information wine and cheese event for prospective founding members as well as the Club's inaugural luncheon meeting.</p>
            </div>
          </details>
          <details class="faq">
            <summary class="question">Describe the relationship between your Club and sponsoring Rotary Club?</summary>
            <div class="answer">
              <p>The two Clubs have a strong working relationship, while they each conduct business autonomously from one another. Each Club has its own officers and board of directors, as well as separate financing. The Rotaract Club does not seek approval from the Rotary Club to conduct any of its business. The Rotary Club provides the Rotaract Club with a small area in its office to maintain Rotaract files. Both Clubs work together to host several joint events each year, including joint meetings and fellowship. The Clubs also have a Professional Partners mentoring program and work together to render service. Rotary Club members regularly send prospective members to Rotaract.</p>
            </div>
          </details>
          <details class="faq">
            <summary class="question">What tools have you found effective in keeping members engaged?</summary>
            <div class="answer">
              <p>At its core level, our Club provides two high quality lunch meetings per month with average attendance of over 100 people. In addition to hearing from our featured speaker, the Club uses lunch meetings to promote the Club's service and social activities. The Club uses a structured committee system that allows every member to participate in an area of the Club. The Club conducts an annual survey to capture the input of our membership. Our Club maintains a web presence at www.rotaractbhm.org. This website provides current news and information on Rotaract events. The website also has a "members only" directory, event registration and a message board. The Club also publishes a monthly newsletter that is emailed to members. The Club heavily uses social media, including Facebook, Instagram and Twitter to post event reminders, pictures and stories as well as posting audio of each luncheon to our podcast.</p>
            </div>
          </details>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
