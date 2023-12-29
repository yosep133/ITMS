<main class="main-content">
    <div class="container-fluid py-4">
        {{-- Tables --}}
        @include('components.tables.FeedService')
        @stack('scripts')
    </div>
</main>

@push('scripts')
<script>
  console.log('test ');
  // for (let index = 0; index < 10; index++) {
  //     setTimeout(() => {
  //       document.getElementsByClassName("progress").style.width = index+'%';
  //       console.log('index '+index);
  //     }, 1000);
  // }
</script>    
@endpush
