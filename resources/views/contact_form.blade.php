<div class="xl:col-span-4 w-full">

    <h1 class="text-center text-4xl font-semibold mb-10">Feel free to send us a message.</h1>

    <div class="px-8 py-10 bg-[#F0F4FC] rounded-lg" style="background: url('{{ asset('img/services/contact-form-bg-shape.jpg') }}') no-repeat center center/cover;">
        <form method="post" action="{{ route('customer.store') }}">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-7 gap-y-5">
                <div>
                    <label for="name" class="block mb-2 text-base font-medium text-interface-200">Name</label>
                    <input type="text" placeholder="Max" name="name" class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                    @if ($errors->has('name'))
                        <div class="text-red-500">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div>
                    <label for="email" class="block mb-2 text-base font-medium text-interface-200">Email</label>
                    <input type="text" placeholder="max.mustermann@mail.de" name="email" class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                    @if ($errors->has('email'))
                        <div class="text-red-500">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div>
                    <label for="telephone" class="block mb-2 text-base font-medium text-interface-200">Telephone</label>
                    <input type="text" placeholder="+49 123456789" name="telephone" class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                    @if ($errors->has('telephone'))
                        <div class="text-red-500">
                            {{ $errors->first('telephone') }}
                        </div>
                    @endif
                </div>
                <div class="md:col-span-2">
                    <label for="description" class="block mb-2 text-base font-medium text-interface-200">Description</label>
                    <textarea type="text"name="description" placeholder="Hier text ainfugen" class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm resize-none h-40">                      </textarea>
                    @if ($errors->has('description'))
                        <div class="text-red-500">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                <button type="submit" class="py-4 px-6 rounded-lg bg-blue-500 text-white font-medium text-lg transition-all hover:bg-blue-600">
                    Send Now
                </button>
            </div>
        </form>
    </div>
</div>
