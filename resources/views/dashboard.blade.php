<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <h2 class="text-lg font-semibold"> Welcome {{ Auth::user()->name }}</h2>
                    </div>
                    <div class="relative overflow-x-auto">
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold"> Your Scores</h2>
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Winner
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userResult as $index => $score)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ ($userResult->currentPage()-1) * $userResult->perPage() + $loop->index + 1 }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$score->user->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$score->winner}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$score->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$userResult->links()}}
                    </div>

                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="relative overflow-x-auto">
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold"> LeaderBoard</h2>
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Wins
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leaderboards as $index => $score)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$index +1 }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$score->user->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$score->total_wins}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
               </div>

            </div>
        </div>
    </div>
</x-app-layout>
