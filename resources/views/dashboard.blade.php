<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <div class="py- m-6 m-2">

        <div class="w-full">
            {{--            @hasanyrole('writer|admin')--}}
            {{-- @can('write post')
                 <a href="{{route('posts.create')}}" class="m-2 p-2 bg-green-400 rounded-lg">
                     Create Post
                 </a>
                 --}}{{--  <a href="{{route('blogs.index')}}" class="m-2 p-2 bg-green-400 rounded-lg">
                       أجراءات الترقية
                   </a>

                   <a href="stage">  مراحل سير معاملة الترقية</a> <br>
   --}}{{--

             @endcan--}}
            {{--<a href="{{route('blogs.index')}}" class="m-2 p-2 bg-green-400 rounded-lg">
                أجراءات الترقية
            </a>

            <a href="stage"> مراحل سير معاملة الترقية</a> <br>
            --}}{{--            @endhasanyrole--}}{{--

            <a href="{{route('hamshs.index')}}" class="m-2 p-2 bg-green-400 rounded-lg">
                أنشاء معاملة جديدة

                --}}{{-- <a href="{{route('hamshs.newapplicaion')}}" class="m-2 p-2 bg-green-400 rounded-lg">
                     أنشاء معاملة جديدة اصلي
                 </a>--}}
            <a href="{{route('hamshs.index')}}" class="m-2 p-2 bg-green-400 rounded-lg">
                أنشاء معاملة جديدة



            <br>
          {{--  <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('hamshidex') }}"> تأييد خطة بحثية </a></div>--}}
            <div class="pull-right">
                <br>
                <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('newapplicaion') }}"> أنشاء معاملة جديدة </a></div>
            <div class="pull-right">
                <br>
                <a class="btn btn-secondary" href="#"> أكمال ترويج معاملة</a></div>
            <br>
            <div class="pull-right">
                <a class="btn btn-secondary" href="#"> الأطلاع على أوليات ترقيات سابقة</a></div>
            <br>
            {{--
             Add dropdown list: <br>
             --}}{{--
                         {{Auth::user()->college_id}} <br> <br>
                         {{Auth::colleges()->college_id}}
             --}}{{--


             <?php
             $array = array("مدرس مساعد", "مدرس", "استاذ مساعد", "أستاذ");
             echo $array[0];  // مدرس مساعد
             ?>

             <br><br>
             <select id="SelectA" onchange="my_fun(this.value);">
                 <option>Select Type of Drink</option>
                 <option value="Hot">Hot Drinks</option>
                 <option value="Cold">Cold Drinks</option>
             </select>
             <div class="dropdown">
                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Dropdown button
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                 </div>
             </div>


     </div>
     <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
         <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
             <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                 <table class="min-w-full divide-y divide-gray-200">
                     <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                     <tr>
                         <th scope="col"
                             class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                             Id
                         </th>
                         <th scope="col"
                             class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                             Title
                         </th>
                         <th scope="col" class="relative px-6 py-3">Edit</th>
                     </tr>
                     </thead>
                     <tbody class="bg-white divide-y divide-gray-200">
                     <tr></tr>
                     @foreach(App\Models\Post::all() as $post)
                         <tr>
                             <td class="px-6 py-4 whitespace-nowrap">{{$post->id}}</td>
                             <td class="px-6 py-4 whitespace-nowrap">{{$post->title}}</td>
                             </td>
                             <td class="px-6 py-4 text-right text-sm">
                                 --}}{{--                                        @hasanyrole('editor|admin')--}}{{--
                                 @can('edit post')
                                     <a href="{{route('posts.edit', $post->id)}}"
                                        class="m-2 p-2 bg-green-800 rounded">Edit</a>
                                 @endcan
                                 --}}{{--                                        @endhasanyrole--}}{{--
                                 --}}{{--                                        @hasanyrole('Publisher|admin')--}}{{--
                                 @can('publish post')
                                     <a href="#" class="m-2 p-2 bg-green-400 rounded">Publish</a>
                                 @endcan
                                 --}}{{--                                        @endhasanyrole--}}{{--
                             </td>
                         </tr>
                     @endforeach


                     <!-- More items... -->
                     </tbody>
                 </table>
                 <div class="m-2 p-2">Pagination</div>
             </div>

     </div>
     --}}

        </div>
    </div>
</x-app-layout>
