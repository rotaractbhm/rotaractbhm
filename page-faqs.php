<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-header">
        <h1 class="main-header-heading"><?php the_title(); ?></h1>
        <div class="main-header-copy"><?php the_content(); ?></div>
      </div>
      <div class="main-body">
        <dl class="faqs">
          <div class="faq">
            <dt class="question"><h6>Where does the Rotaract Club of Birmingham meet?</h6></dt>
            <dd class="answer">The Club meets at The Harbert Center, the premier downtown Birmingham location for corporate, civic and social events. In the early 1980’s, members of area civic clubs recognized the need for a facility which would provide office space and become a permanent meeting location for civic organizations. Hall W. Thompson and John M. Harbert, III spearheaded the effort to seek donations and plan construction of the facility. Building The Harbert Center became a community project as the members of the Rotary Club of Birmingham, Kiwanis Club of Birmingham and the Monday Morning Quarterback Club jointly raised the funds needed to complete the construction and furnishing of the building. The continuing contributions of members of these organizations, as well as Sunrise Rotary and the Downtown Exchange Club, ensure the long-term upkeep of the building and its furnishings. Named to honor John M. Harbert, III for his involvement in the project, The Harbert Center opened on June 16, 1986. Since that time, The Harbert Center has been the home of a number of civic and professional organizations, and has hosted many memorable community events. Events as diverse as meetings, wedding receptions, awards ceremonies, bar mitzvahs and retirement dinners are often held at <a href="https://www.theharbertcenter.com/home/" target="_blank" rel="noopener">The Harbert Center</a>.</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>How often does the Rotaract Club of Birmingham meet?</h6></dt>
            <dd class="answer">Lunch meetings are held the first and third Thursday of each month from 11:45AM to 1:00PM featuring a speaker who is a leader business, government, community or other notable endeavors.</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>How much are your Club dues?</h6></dt>
            <dd class="answer">Annual dues are $350. These dues cover all lunch meeting meals, provide full or partial subsidy for fellowship events and also cover Club operating and administration expenses. In addition to the annual dues, members also are required to make a $20 annual contribution to Rotaract Club of Birmingham Foundation and purchase a pair of tickets to the Club’s annual fundraising gala at approximately $100. New members pay a $25 initiation fee and a $25 Foundation contribution.</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>What is the age requirement of the Club?</h6></dt>
            <dd class="answer">Prospective members must be between the ages of 21 to 30 at the time their application is submitted to be considered for membership. Members can stay active until the Rotary year in which they turn 35. The Club allows members to remain active over the age of 30 for two main reasons. First, many of our members do not want to leave the Club after they turn 30 due to the strong relationships they have developed with other Club members. Secondly, many of the Rotary Clubs in Birmingham typically do not offer membership to members as young as 30. We feel that allowing members to stay active until 35 provides an opportunity to mentor younger members of Rotaract and hopefully provide time to transition into a local Rotary Club.</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>How many members does your Club have? What percentage is male? Female?</h6></dt>
            <dd class="answer">The Rotaract Club of Birmingham has [__] members, evenly distributed among male and female members.</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>What is the average age of your Club member?</h6></dt>
            <dd class="answer">29 years old</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>What is the composition of membership employment represented in your Club?</h6></dt>
            <dd class="answer">Finance – 22%, Legal – 13%, Real Estate – 10%, Insurance – 7%, Accounting – 7%, Sales – 15%, Non-profit – 6%, Public Utilities – 5%, Business Development – 4%, Public Relations – 3%, Education – 6%, Marketing – 2%, Information Technology – 2%, Healthcare – 2%, Engineering – 2%, Architecture – 1%, Construction – 1%, Politics – 1%, Print Media – 0.5%, Interior Design – 0.5%, Television – 0.5%</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>Does your Club receive financial support from your sponsoring Rotary Club?</h6></dt>
            <dd class="answer">Yes, the Rotary Club of Birmingham generally provides some funds to cover costs associated with sending the incoming Rotaract President to the Rotaract Preconvention Meeting and Rotary International Convention. The Rotary Club also offers reduced cost to Rotaract members for joint fellowship events between the Clubs. The Rotary Club also provides comped lunches to all current Rotaract Board members and 15 at-large members every luncheon. To help start our Club, the Rotary Club provided the full cost of an information wine and cheese event for prospective founding members as well as the Club’s inaugural luncheon meeting.</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>Describe the relationship between your Club and sponsoring Rotary Club?</h6></dt>
            <dd class="answer">The two Clubs have a strong working relationship while they each conduct business autonomously from one another. Each Club has its own officers and board of directors, as well as separate financing. The Rotaract Club does not see approval from the Rotary Club to conduct any of its business. The Rotary Club provides the Rotaract Club with a small area in its office to maintain Rotaract files. Both Clubs work together to host several joint events each year, including joint meetings and fellowship. The Clubs also have a Professional Partners mentoring program and work together to render service. Rotary Club members regularly send prospective members to Rotaract.</dd>
          </div>
          <div class="faq">
            <dt class="question"><h6>What tools have you found effective in keeping members engaged?</h6></dt>
            <dd class="answer">At its core level, our Club provides two high quality lunch meetings per month with average attendance of over 100 people. In addition to hearing from our featured speaker, the Club uses lunch meetings to promote the Club’s service and fellowship activities. The Club uses a structured committee system that allows every member to participate in an area of the Club. The Club conducts an annual survey to capture the input of our membership. Our Club mains a web presence at www.BirminghamRotaract.com. This website provides current news and information on Rotaract events. The website also has a "members only" directory event registration and a message board. The Club also publishes a monthly newsletter that is emailed to members. The Club heavily uses social media, including Facebook and Twitter to post event reminders, pictures and stories.</dd>
          </div>
        </dl>
      </div>
      <div class="main-footer">
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
