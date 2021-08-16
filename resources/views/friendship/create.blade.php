<form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
    action="{{ route('friendships.store') }}">
    @csrf
    <input name="user1_id" type="hidden" value="{{ Auth::user()->id }}">
    <input name="user2_id" type="hidden" value="{{ $user->id }}">

    <div class="flex flex-wrap">
        <button type="submit"
            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
            {{ __('Send Friendship') }}
        </button>
    </div>
</form>
