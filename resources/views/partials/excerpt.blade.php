	<div class="article-main">

	<h1 class="h1"><a href={{route('articles.show',$article->id)}}>{{$article->title}}</a>	</h1>
		

	<p class="published_at">Published: {{ date('F d, Y', strtotime($article->published_at)) }}</p>

	<p>{{$article->excerpt}}</p> 
	<p><a href={{route('articles.show',$article->id)}} class='btn btn-primary'>View Full Article</a> </p>
	
	</div>