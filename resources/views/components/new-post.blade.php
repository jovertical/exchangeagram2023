<div x-show="showNewPostModal">
    <div class="fixed inset-0 bg-black opacity-50"></div>

    <div class="fixed top-0 right-0 m-3">
        <button class="text-gray-200 hover:text-gray-300" type="button"
            @click="showNewPostModal = false">
            <svg role="img" aria-label="Close" fill="currentColor" height="18"
                viewBox="0 0 24 24" width="18">
                <title>Close</title>
                <polyline fill="none" points="20.643 3.357 12 12 3.353 20.647"
                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="3"></polyline>
                <line fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="3" x1="20.649" x2="3.354"
                    y1="20.649" y2="3.354"></line>
            </svg>
        </button>
    </div>

    <div class="fixed inset-0 m-auto h-[400px] w-full max-w-md rounded-lg bg-white shadow-md">
        <form class="h-full w-full" x-data="newPost">
            <div class="w-full border-b border-gray-300 p-4">
                <h4 class="font-semibold text-gray-800">Create new post</h4>
            </div>

            <input class="sr-only" id="photo-file-input" type="file" accept="image/*"
                @change="loadPhoto">

            <div x-show="!photo" class="flex h-full items-center justify-center">
                <div class="flex flex-col items-center text-gray-900">
                    <svg class="h-20" role="img"
                        aria-label="Icon to represent media such as images or videos"
                        fill="currentColor" viewBox="0 0 97.6 77.3" width="96">
                        <title>Icon to represent media such as images or videos</title>
                        <path
                            d="M16.3 24h.3c2.8-.2 4.9-2.6 4.8-5.4-.2-2.8-2.6-4.9-5.4-4.8s-4.9 2.6-4.8 5.4c.1 2.7 2.4 4.8 5.1 4.8zm-2.4-7.2c.5-.6 1.3-1 2.1-1h.2c1.7 0 3.1 1.4 3.1 3.1 0 1.7-1.4 3.1-3.1 3.1-1.7 0-3.1-1.4-3.1-3.1 0-.8.3-1.5.8-2.1z"
                            fill="currentColor"></path>
                        <path
                            d="M84.7 18.4 58 16.9l-.2-3c-.3-5.7-5.2-10.1-11-9.8L12.9 6c-5.7.3-10.1 5.3-9.8 11L5 51v.8c.7 5.2 5.1 9.1 10.3 9.1h.6l21.7-1.2v.6c-.3 5.7 4 10.7 9.8 11l34 2h.6c5.5 0 10.1-4.3 10.4-9.8l2-34c.4-5.8-4-10.7-9.7-11.1zM7.2 10.8C8.7 9.1 10.8 8.1 13 8l34-1.9c4.6-.3 8.6 3.3 8.9 7.9l.2 2.8-5.3-.3c-5.7-.3-10.7 4-11 9.8l-.6 9.5-9.5 10.7c-.2.3-.6.4-1 .5-.4 0-.7-.1-1-.4l-7.8-7c-1.4-1.3-3.5-1.1-4.8.3L7 49 5.2 17c-.2-2.3.6-4.5 2-6.2zm8.7 48c-4.3.2-8.1-2.8-8.8-7.1l9.4-10.5c.2-.3.6-.4 1-.5.4 0 .7.1 1 .4l7.8 7c.7.6 1.6.9 2.5.9.9 0 1.7-.5 2.3-1.1l7.8-8.8-1.1 18.6-21.9 1.1zm76.5-29.5-2 34c-.3 4.6-4.3 8.2-8.9 7.9l-34-2c-4.6-.3-8.2-4.3-7.9-8.9l2-34c.3-4.4 3.9-7.9 8.4-7.9h.5l34 2c4.7.3 8.2 4.3 7.9 8.9z"
                            fill="currentColor"></path>
                        <path
                            d="M78.2 41.6 61.3 30.5c-2.1-1.4-4.9-.8-6.2 1.3-.4.7-.7 1.4-.7 2.2l-1.2 20.1c-.1 2.5 1.7 4.6 4.2 4.8h.3c.7 0 1.4-.2 2-.5l18-9c2.2-1.1 3.1-3.8 2-6-.4-.7-.9-1.3-1.5-1.8zm-1.4 6-18 9c-.4.2-.8.3-1.3.3-.4 0-.9-.2-1.2-.4-.7-.5-1.2-1.3-1.1-2.2l1.2-20.1c.1-.9.6-1.7 1.4-2.1.8-.4 1.7-.3 2.5.1L77 43.3c1.2.8 1.5 2.3.7 3.4-.2.4-.5.7-.9.9z"
                            fill="currentColor"></path>
                    </svg>

                    <div class="mt-2">
                        <p class="text-center font-medium">Drag photos and videos here</p>
                    </div>

                    <x-button class="mt-4" @click="selectPhoto">
                        Upload from computer
                    </x-button>
                </div>
            </div>

            <div v-show="photo">
                <img class="h-[400px] w-full object-cover object-center" x-ref="post-new-photo-img" />
            </div>
        </form>
    </div>
</div>

<script>
    let newPost = () => {
        return {
            body: 'Test',
            photo: null,

            selectPhoto() {
                const element = document.getElementById('photo-file-input');

                element.click();
            },

            loadPhoto(event) {
                const newPhoto = event.target.files[0];

                this.photo = newPhoto;

                const image = this.$refs['post-new-photo-img'];

                image.src = URL.createObjectURL(newPhoto);
            },

            storePost() {
                console.log('Storing post...')
            }
        };
    }
</script>
