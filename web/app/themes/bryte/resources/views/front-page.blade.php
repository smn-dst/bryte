@extends('layouts.app')
@section('view-name', 'home')

@section('content')
  @while (have_posts())
    @php the_post() @endphp
    <!-- INTRODUCTION -->
    <div class="text flex flex-col">
        <div>
        <?php the_field('title') ?>
        </div>
        <div>
        <?php the_field('title') ?>
        </div>
    </div>
  @endwhile
@endsection