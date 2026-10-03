{{-- blade template --}}
{{-- 
<?php
// $x = 0;
// // $names = ['Ahmed', 'Ali', 'Israa', 'Dana'];
// $names = [];
// echo $x;
?>

{{ $x }}

<?php if ($x != 1) { ?>
<h1>Hello Backend Eng.</h1>
<?php } ?>

<?php
// for loop , i > count()
// foreach ($names as $name) {
//     # code...
// }
?>

@if ($x == 1)
    <h1>Hello Backend Eng.</h1>
@else
    <h1>Hello Forntend</h1>
@endif

<ul>
    @foreach ($names as $name)
        <li>{{ $name }}</li>
    @endforeach

    @forelse ($names as $name)
        <li>{{ $name }}</li>
    @empty
        <li>Is Empty.....</li>
    @endforelse
</ul> --}}
