<x-layout>

    <div class="space-y-10 mb-16" >

        <section class="mt-4">
            <h1 class="font-bold text-4xl text-center">Let's Find Your Next Job</h1>
            <form action="" class="mt-4">
                <input type="text" placeholder="Web developer"
                    class="rounded-xl bg-white/25 border-white-5 border-white/10 px-5 py-4 w-full mx-w-xl" />
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>


        <section>
            <x-section-heading>Tag</x-section-heading>
            <div class="mt-1 space-x-2">
                <x-tag>tag1</x-tag>
                <x-tag>tag2</x-tag>
                <x-tag>tag3</x-tag>
                <x-tag>tag4</x-tag>
                <x-tag>tag5</x-tag>
                <x-tag>tag6</x-tag>
                <x-tag>tag7</x-tag>
                <x-tag>tag8</x-tag>
                <x-tag>tag9</x-tag>
            </div>
        </section>


        <section>
            <x-section-heading>Find job</x-section-heading>
            <div class="space-y-4 max-h-80 overflow-auto" >
                <x-find-job-card />
                <x-find-job-card />
                <x-find-job-card />
                <x-find-job-card />

                <x-find-job-card />
                <x-find-job-card />


            </div>

        </section>
    </div>

</x-layout>
