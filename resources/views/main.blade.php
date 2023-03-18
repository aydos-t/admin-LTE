@extends('layouts.main')
@section('content')
    This is main page <br/>
@endsection
{{--    <?php--}}
{{--//    $arr = [1, 2, 3, 4, 5];--}}
{{--//    foreach ($arr as $value) {--}}
{{--//        if ($value < 3) {--}}
{{--//                echo $value . PHP_EOL;--}}
{{--//        }--}}
{{--//    }--}}
{{--//    $arr = ["some" => 10, 20, 30, 40, 50];--}}
{{--//    foreach ($arr as $key => $value) {--}}
{{--//        echo $key . PHP_EOL;--}}
{{--//        echo $value . "\n";--}}
{{--//        echo "--------" . "\n";--}}
{{--//    }--}}

{{--//    $numbers = [];--}}
{{--//    $strings = [];--}}
{{--//    $bools = [];--}}
{{--//    $arrs = [];--}}
{{--//--}}
{{--//    $arr = [--}}
{{--//        12,--}}
{{--//        34,--}}
{{--//        56,--}}
{{--//        78,--}}
{{--//        'Abo',--}}
{{--//        'ShAbo',--}}
{{--//        'KotoAbo',--}}
{{--//        'MOBOAbo',--}}
{{--//        false,--}}
{{--//        true,--}}
{{--//        false,--}}
{{--//        false,--}}
{{--//        [12, 34],--}}
{{--//        [56, 78],--}}
{{--//        [90, 00],--}}
{{--//    ];--}}
{{--//--}}
{{--//    foreach ($arr as $value) {--}}
{{--//        if (is_int($value)) {--}}
{{--//            $numbers[] = $value;--}}
{{--//        } elseif (is_string($value)) {--}}
{{--//            $strings[] = $value;--}}
{{--//        } elseif (is_bool($value)) {--}}
{{--//            $bools[] = $value;--}}
{{--//        } elseif (is_array($value)) {--}}
{{--//            $arrs[] = $value;--}}
{{--//        }--}}
{{--//    }--}}
{{--//    var_dump($strings);--}}


{{--//    $array = array(--}}
{{--//        "foo" => "bar",--}}
{{--//        "bar" => "foo",--}}
{{--//    );--}}
{{--//--}}
{{--//    /* Краткая форма массива */--}}
{{--//    $arr = [--}}
{{--//        "foo" => "bar",--}}
{{--//        "bar" => "foo",--}}
{{--//    ];--}}
{{--//    echo 'var_dump................'; var_dump($arr);--}}
{{--//    echo "<br />";--}}
{{--//    echo 'print_r................'; print_r($arr);--}}
{{--//echo "<br />";--}}
{{--//--}}
{{--//    $array = array(--}}
{{--//        "foo" => "bar",--}}
{{--//        42    => 24,--}}
{{--//        "multi" => array(--}}
{{--//            "dimensional" => array(--}}
{{--//                "array" => "foo"--}}
{{--//            )--}}
{{--//        )--}}
{{--//    );--}}
{{--//--}}
{{--//    var_dump($array["foo"]);--}}
{{--//    var_dump($array[42]);--}}
{{--//    var_dump($array["multi"]["dimensional"]["array"]);--}}
{{--//--}}
{{--//--}}
{{--//    function getArray() {--}}
{{--//        return array(1, 2, 3);--}}
{{--//    }--}}
{{--//--}}
{{--//    $secondElement = getArray()[1];--}}

{{--//    // Создаём простой массив.--}}
{{--//    $array = array(1, 2, 3, 4, 5);--}}
{{--//    print_r($array); echo "<br />";--}}
{{--//--}}
{{--//    // Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:--}}
{{--//    foreach ($array as $i => $value) {--}}
{{--//        unset($array[$i]);--}}
{{--//    }--}}
{{--//    print_r($array); echo "<br />";--}}
{{--//--}}
{{--//    // Добавляем элемент (обратите внимание, что новым ключом будет 5, вместо 0).--}}
{{--//    $array[] = 6;--}}
{{--//    print_r($array); echo "<br />";--}}
{{--//--}}
{{--//// Переиндексация:--}}
{{--//    $array = array_values($array);--}}
{{--//    $array[] = 7;--}}
{{--//    print_r($array); echo "<br />";--}}


{{--    ?>--}}
{{--    <div>--}}


{{--        --}}{{--    @foreach($posts as $post)--}}
{{--        --}}{{--        <div>{{$post->title}}</div>--}}
{{--        --}}{{--        <div>{{$post->content}}</div>--}}
{{--        --}}{{--        <div>{{$post->likes}}</div>--}}
{{--        --}}{{--    @endforeach--}}
{{--    </div>--}}