<?php
/**
 * @package WooCommerce Resumes
 * Dashboard page form information in a popup
 *
 */

if ( 'contact-info' === $id ) {
	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Contact Info</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Please enter your information as you would like to see it on your GIYGgraph</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Personal branding is becoming more popular. Not sure of a photo? Consider using your LinkedIn photo so all professional profiles match</div>';

	$tips['response'] .= '</div>';
}

if ( 'dream-job' === $id ) {
	$resume_categories = get_terms( array(
		'taxonomy' => 'resume-category',
		'hide_empty' => false,
	) );
	$resume_categories_html = '';
	foreach ( $resume_categories as $resume_category ) {
		$resume_categories_html .= '<li>' . $resume_category->name . '</li>';
	}

	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Dream Job</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Below are a list of career categories to help get your juices flowing. You can also type your own on your GIYGgraph.</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Think about a career you\'re passionate about or if you\'re applying to a specific position, use the position title from the actual job description.</div>';
	$tips['response'] .= '<ul class="list-tips">' . $resume_categories_html . '</ul>';

	$tips['response'] .= '</div>';
}

if ( 'ideal-company' === $id ) {
	$resume_ideal_companies = get_terms( array(
		'taxonomy' => 'resume-ideal-company',
		'hide_empty' => false,
	) );
	$resume_ideal_companies_html = '';
	foreach ( $resume_ideal_companies as $resume_ideal_company ) {
		$resume_ideal_companies_html .= '<li>' . $resume_ideal_company->name . '</li>';
	}

	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Ideal Company</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Below are a list of company styles.  You can also type your own style on your GIYGgraph.</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> If you don\'t know a category, simply describe the type of company that fits you best. Think about their customers, products or services, culture, mission, location or management</div>';
	$tips['response'] .= '<ul class="list-tips">' . $resume_ideal_companies_html . '</ul>';

	$tips['response'] .= '</div>';
}

if ( 'accomplishments' === $id ) {
	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Accomplishments</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Now it\'s time to brag a bit! Describe three outstanding accomplishments or personal victories that any prospective employer would love to know about you.  Dig deep.  Outstanding accomplishments in prior roles, in your personal life or in your community that help show the "real you."  (Limited to 140 characters)</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Make more impact by showing your accomplishment\'s results. Ie: Grew sales by "x", Made "x" more efficient, hired "x" number of employees, etc.</div>';

	$tips['response'] .= '</div>';
}

if ( 'skills' === $id ) {
	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Skills</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Tell us your top 5 professional skills a company would find valuable and then rank how awesome you are! (Be concise please.  Each answer is limited to 40 characters)</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Skills examples:  Coding languages, Schedule Management, Systems Analysis, Sales, Marketing, Graphic Design, Collaboration, Time Management or Critical Thinking. Check your LinkedIn page for your highest skills endorsements. </div>';

	$tips['response'] .= '</div>';
}

if ( 'activities' === $id ) {
	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Activities</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Please describe 3 professional activities that energize you enough to "jump out of bed in the morning!" Passions, social causes, challenging projects, helping people, mentoring, programming, motivating, technology, collaborating with teams, analyzing, etc.  (Limited to 48 characters)</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Employers want to see what really motivates you, makes you excited or what you\'re passionate about. Be descriptive.</div>';

	$tips['response'] .= '</div>';
}

if ( 'personality' === $id ) {
	$resume_professional_personalities = get_terms( array(
		'taxonomy' => 'resume-professional-personality',
		'hide_empty' => false,
	) );
	$resume_professional_personalities_html = '';
	foreach ( $resume_professional_personalities as $resume_professional_personality ) {
		$resume_professional_personalities_html .= '<li class="professional-list"><h3>' . $resume_professional_personality->name . '</h3><p>' . $resume_professional_personality->description . '</p><div class="resource-content"><dl class="dl-horizontal">' . get_field( 'html_listings', 'resume-professional-personality_' . $resume_professional_personality->term_id ) . '</dl></div></li>';
	}

	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Personality</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Let\'s start talking about what\'s really "under the hood."  This is designed to better align your passions, interests and core values with potential employers.  Below are 6 professional personality types and associated key words that will help you understand them.  You can edit these supporting key words on your GIYGgraph.  Please pick the ONE that fits you BEST.</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Applying to a specific job? Add matching personality traits or soft skills listed on the job posting.</div>';
	$tips['response'] .= '<ul class="list-tips personal-list">' . $resume_professional_personalities_html . '</ul>';

	$tips['response'] .= '</div>';
}

if ( 'values' === $id ) {
	$resume_core_values = get_terms( array(
		'taxonomy' => 'resume-core-value',
		'hide_empty' => false,
	) );
	$resume_core_values_html = '';
	foreach ( $resume_core_values as $resume_core_value ) {
		$resume_core_values_html .= '<li>' . $resume_core_value->name . '</li>';
	}
	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Values</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>You work best when your personal values align with company culture.  Please choose your 10 core values from the list below or enter your own on your GIYGgraph (single words only please)</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Although many of the values will have meaning, you will feel stronger about some more than others. Add only your strongest values. To align best with a company, check their website for their values, mission, or cause.</div>';
	$tips['response'] .= '<ul class="list-tips">' . $resume_core_values_html . '</ul>';

	$tips['response'] .= '</div>';
}

if ( 'culture' === $id ) {
	$resume_corporate_cultures = get_terms( array(
		'taxonomy' => 'resume-corporate-culture',
		'hide_empty' => false,
	) );
	$resume_corporate_cultures_html = '';
	foreach ( $resume_corporate_cultures as $resume_corporate_culture ) {
		$resume_corporate_cultures_html .= '<li class="professional-list culture-list"><h3>' . $resume_corporate_culture->name . '</h3><div class="resource-content"><dl class="dl-horizontal">' . get_field( 'html_listings', 'resume-corporate-culture_' . $resume_corporate_culture->term_id ) . '</dl></div></li>';
	}

	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Culture</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Let\'s get to know the company culture that helps you do your best work! Choose the culture that fits your personality best.</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Aligning with a company\'s culture is critical to your success. Think about the types of cultures where you weren\'t successful. Why not? Then think about the types of cultures you hear or read about that look appealing. Why?</div>';
	$tips['response'] .= '<ul class="list-tips personal-list">' . $resume_corporate_cultures_html . '</ul>';


	$tips['response'] .= '</div>';
}

if ( 'team' === $id ) {
	$resume_team_attributes = get_terms( array(
		'taxonomy' => 'resume-team-attribute',
		'hide_empty' => false,
	) );
	$resume_team_attributes_html = '';
	foreach ( $resume_team_attributes as $resume_team_attribute ) {
		$resume_team_attributes_html .= '<li>' . $resume_team_attribute->name . '</li>';
	}

	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Team</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>When evaluating opportunities, what team attributes do you value most? Pick your top 5 from the list below, or key in your own.  (Limit 30 characters)</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> A team\'s sub culture can be different from the company culture. Think about what values, skills or vision you bring to a team when you’re at your best. What can the team expect from you?</div>';
	$tips['response'] .= '<ul class="list-tips">' . $resume_team_attributes_html . '</ul>';

	$tips['response'] .= '</div>';
}

if ( 'impact-statement' === $id ) {
	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Impact Statement</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Is there one more sentence that summarizes your personal value you offer potential employers? (Limited to 200 characters, please)</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> This is a great way to summarize who you are, what value you bring and the type of results you will deliver. (I.e. "I am a polished, results-focused sales professional that brings a successful track record of exceptional relationship building expertise and instant revenue impact.")</div>';

	$tips['response'] .= '</div>';
}

if ( 'social-handles' === $id ) {
	$tips['response'] .= '<div class="userpro-head"><h1 class="media-heading">Social</h1></div><div class="userpro-body">';

	$tips['response'] .= '<p>Tell prospective employers where they can find you online (Optional):</p>';
	$tips['response'] .= '<div class="tips-section"><strong>GIYG Tip:</strong> Make it easy for potential employers to get to know your personality or any special skills you may have. Popular social sites, personal websites or industry specific sites are a great addition. Just make sure you’re presenting a professional appearance.</div>';

	$tips['response'] .= '</div>';
}
