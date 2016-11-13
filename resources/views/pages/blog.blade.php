@extends('layout.master')

	@section('style')
		<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	@endsection

	@section('content')

		<div id="notification" style="display: none;">
 			<span class="dismiss"><a title="dismiss this notification">x</a></span>
		</div>
						
		<div class="main">
			<div class="product" >
				
				<div class="container">
<!--Start here?-->
<h2 style="text-align: center;"><strong>How it all started</strong></h2>
<p><strong>Steve Jobs</strong> very aptly said, &ldquo;<em>You can't connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future</em>.&rdquo;</p>
<p>So back then when we started it, little did we realize that one day our project would be our product! &nbsp; &nbsp;</p>
<p>Me and my co-founder Atul, both of us started together this journey with our innovation project in MSc Mathematics Education course, Delhi University.</p>
<p>Each one of us had to individually choose a topic and then according to the similarities in topics we were grouped. Now Atul wanted to work on Games and I wanted to do something in recreational Math which brought us together in a group! This random project grouping has led to a wonderful 3 yearlong collaboration already and hoping will go hale and hearty for the coming years too!</p>
<p>So we had a vague idea on what we wanted to do but we decided to spend a lot of time in figuring out What is the problem with Math? Why do children don&rsquo;t like it? Why would they not want to do it? We kicked in the journey with these thoughts. From our own understanding the problem was the modes of entertainment available these days! When a child has so many engaging and entertaining options to spend the day, who would be interested in studying? Back then despite playing with friends, visiting our relatives, fighting with siblings we still managed to find time to sit and do our &ldquo;homework&rdquo;. Today where is that time? Probably lost amidst so many different options.</p>
<p>Like every problem has in it the seeds of its own solutions, this one did too! Since we spent so much time thinking over the problem the solution seemed pretty simple and logical- <strong>To embed all the entertainment modes with the educational things</strong> you want children to imbibe and they shall automatically study while having the same fun!</p>
<p><img src="{{ URL::asset('images/blog1/problem.jpg') }}" alt="problem" class="blog_img"/>&nbsp; &nbsp;<img src="{{ URL::asset('images/blog1/solution.jpg') }}" alt="Solution" class="blog_img" /></p>
<p>With this sorted and the approaching deadline for project title submission, next few discussions centered around zeroing in on what really the project will be because we had strict instructions to create something to resolve the problem and not just state the problem. With time and skill constraints we finalized working on Games and particularly Board games to start with after listing out all pros and cons (In case you are curious to know why board games, I am attaching the image of the presentation slide.) So finally our project title was <strong>Math Renaissance: the revival of Mathematical Board Games and Toys</strong>.</p>
<p><img src="{{ URL::asset('images/blog1/why_board_games.png') }}" alt="Why board Games" class="blog_img" /></p>
<p>So we understood the general- &lsquo;not wanting to study&rsquo; attitude and had fixed a way to attract students to studying but there was one more question that still bothered us and that was- <strong>Why is Math that scary for kids? Why is Math performance going down?</strong> The answer to this question came as a conclusion from a lot of educational report studying and observation. Unfortunately, today in most schools in the pursuit of syllabus completion and the marks oriented attitude of students, teachers and parents alike, the focus is on rote-learning and in some cases understanding concepts too but what they have failed at is connecting these concepts with applications in daily life, giving students that much needed context to actually relate the theoretical knowledge to the applied part. This anxiety breeds fear and phobia of Math. &nbsp;</p>
<p><img src="{{ URL::asset('images/blog1/is_math_scary.jpg') }}" alt="Is Math Scary" class="blog_img" />&nbsp; &nbsp; &nbsp;<img src="{{ URL::asset('images/blog1/lets_try_this_way.jpg')}}" alt="Let's try this way" class="blog_img" /></p>
<p>What do we do? Give them Context! Show them the beautiful and applied side of Math which was so far very dull, dark, calculative and theoretical!</p>
<p>Meanwhile, in my educational coursework I had given a presentation on John Dewey as one of my favourite philosophers so I immediately found connect in what he said: &ldquo;Give the pupils something to do, not something to learn; and the doing is of such a nature as to demand thinking; learning naturally results.&rdquo; Well&hellip;that&rsquo;s how dots connect, they just do!</p>
<p>With this inspiration we started chalking out ideas for our board games hoping kids will love it!</p>
<p>Now onwards all the left time we had went in game creation and lots of &lsquo;Mazdoori&rsquo; (wood, plastic, clay, cardboard..whatever we could experiment with) to give shape to our crazy ideas. Days and nights were spent in college to create all the components of those games. And finally as real as all student-deadlines are, we reached our presentation hall only five minutes late with red sleepy eyes and the starved look. We were able to pull off four ready to play games! The excitement and anxiety before that first presentation was unparalleled! But it was worth it! As is said, hard work doesn&rsquo;t go unrewarded. All our efforts were much appreciated and everyone seemed to like the idea too. The faculty members even tried playing the games!</p>
<p>Amidst the joy and all those smiles and thank you greetings , Atul and I exchanged a look- the look of relief and satisfaction.</p>
<p>Sigh! It ended well! Wait what? Did I say it ended?&nbsp; Haha</p>
<p><strong>Well this is how it all began!!&nbsp;</strong></p>
<p>And oh! I missed telling you the best and most encouraging thing: We all were reimbursed for the expenses we did for our innovation projects.</p>
<p>&nbsp;<img src="{{ URL::asset('images/blog1/mazdoori_1.jpg')}}" alt="Mazdoori-1" class="blog_img" />&nbsp; &nbsp;&nbsp;<img src="{{ URL::asset('images/blog1/mazdoori_2.jpg')}}" alt="Mazdoori-2" class="blog_img" /></p>
<p><img src="{{ URL::asset('images/blog1/mazdoori_3.jpg') }}" alt="Mazdoori-3" class="blog_img" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<!--end here-->
				</div>
			</div>
		</div>
		<meta name="_token" content="{!! csrf_token() !!}" />
	    <script src="{{ URL::asset('js/scroll.js') }}"></script>
	@endsection