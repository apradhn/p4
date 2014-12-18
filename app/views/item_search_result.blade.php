<section>
	@if (count($items) >= 1)
		{{ Form::open(array('url' => '/sort-laundry', 'method' => 'POST', 'class' => 'form-horizontal')) }}
			@foreach ($items as $item)
				<div class="well col-md-6 col-md-offset-2">

					<img class="swatch" src="{{ asset($item->color_url) }}">
					
					<div class="item">
						<span class="item-name">{{ $item->name; }}</span>	
						<br> 					
						@foreach ( $item->tags as $tag)
							<small class="tag">{{ $tag->name }}</small>
						@endforeach
					</div>

					<div class="modify-buttons">
						<span class="checkbox item-checkbox">
							<label>
								{{ Form::checkbox($item->id, $item->name) }}
							</label>
						</span>						
					</div>
				</div>
			@endforeach
			{{ Form::submit('Sort!', array('class' => 'btn btn-primary btn-raised btn-lg sort')) }}
		{{ Form::close() }}
	@else
		<div class="well col-md-6 col-md-offset-2">
			<h4 class="not-found">Query Not Found!</h4>
		</div>
	@endif
    <script>
        $(document).ready(function() {
            $.material.init();
        });
    </script> 	
</section>