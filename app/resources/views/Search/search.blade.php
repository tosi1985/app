<!DOCTYPE html>
 <html>
  <head>
    <meta charset=”UTF-8″>
    <title>search</title>
    <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/style.css') }}"/>
  </head>

  <body>
  
    <h1>検索結果</h1>


      <li>
      @foreach ($query  as $list)
        <a href="/framework/detail?id={{ $list->id}}">
          {{ $list->name }}          
        </a>
      @endforeach
      </li>
   
   

    <p>常設エリア</p>

    <p>最新の投稿</p>

    <p>最新の投稿へのリンク</p>

    <p>左右ボタン</p>

    <p>最新の事例</p>

    <p>最新の事例へのリンク</p>

    <p>左右ボタン</p>

    <p>参考文献</p>

    <p>参考文献へのリンク</p>

    <p>左右ボタン</p>

    <footer>
     <small class="parent">
       copyrights &copy; 2019 Knowledgenote All rights Reserved.
     </small>
    </footer>

  </body>

 </html>
