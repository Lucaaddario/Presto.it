<x-layout>
    <main>
        <section class=" container-fluid ">
            <div class="row">
                @foreach($categories as $category)
                <h1 class="text-center">{{$category->name}}</h1>
                @foreach($category->announcements as $announcement)
                <div class="col-12 col-md-3 bg-info ">
                    <div class="card" style="width: 18rem;">
                        <img src="http://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">{{$announcement->description}}</p>
                            <p class="card-text">{{$announcement->category->name}}</p>
                            <p class="card-text">$ {{$announcement->price}}</p>
                            <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                            <a href="{{route('show_announcements', compact('announcement'))}}" class="btn btn-primary">Dettaglio Prodotto</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </section>
    </main>
    <x-footer/>
</x-layout>