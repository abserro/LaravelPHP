<h1>{{ $product->name }}</h1>
<p>Идентификатор: {{ $product->id }}</p>
<p>Символьный код: {{ $product->code }}</p>
<p>Подробное описание: {{ $product->description }}</p>
<p>Дата и время создания: {{ $product->created_at }}</p>
<p>Цена: {{ $product->price }}</p>
<p>Количество единиц на складе: {{ $product->quantity }}</p>
<img src="{{ $product->image }}" alt="Изображение товара">
