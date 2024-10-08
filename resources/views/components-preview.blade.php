<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

        <title>Preview</title>

        <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#2FBC85',
                            text: '#FFFFFF',
                        },
                        secondary: {
                            DEFAULT: '#F97316',
                            text: '#FFFFFF',
                        },
                        neutral: '#334155',
                        inactive: '#64748B',
                        border: '#E7EBEF',
                        disabled: '#EBE8DE',
                        enhanced: '#36B422'
                    }
                }
            }
        }
        </script>
    </head>
    <body>
        <div class="flex flex-col container mx-auto my-20 gap-5">
            <h1 class="font-bold text-xl">Rapidez Blade Components preview</h1>

            <h2 class="font-bold text-lg">Input components</h2>

            <div class="grid grid-cols-3 gap-5 [&>fieldset]:border [&>fieldset]:rounded [&>fieldset]:p-5">
                <h3 class="font-bold text-md">Base components</h3>
                <h3 class="font-bold text-md">Components with a label</h3>
                <h3 class="font-bold text-md">Components with a required label</h3>

                <fieldset>
                    <legend>Input</legend>
                    <x-rapidez::input />
                </fieldset>

                <fieldset>
                    <legend>Input</legend>
                    <label>
                        <x-rapidez::label>Something</x-rapidez::label>
                        <x-rapidez::input />
                    </label>
                </fieldset>

                <fieldset>
                    <legend>Input</legend>
                    <label>
                        <x-rapidez::label>Something</x-rapidez::label>
                        <x-rapidez::input required />
                    </label>
                </fieldset>

                <fieldset>
                    <legend>Checkbox</legend>
                    <x-rapidez::input.checkbox.base />
                </fieldset>

                <fieldset>
                    <legend>Checkbox</legend>
                    <x-rapidez::input.checkbox>
                        Something
                    </x-rapidez::input.checkbox>
                </fieldset>

                <fieldset>
                    <legend>Checkbox</legend>
                    <x-rapidez::input.checkbox required>
                        Something
                    </x-rapidez::input.checkbox>
                </fieldset>

                <fieldset>
                    <legend>Radio</legend>
                    <x-rapidez::input.radio.base />
                </fieldset>

                <fieldset>
                    <legend>Radio</legend>
                    <x-rapidez::input.radio>
                        Something
                    </x-rapidez::input.radio>
                </fieldset>

                <fieldset>
                    <legend>Radio</legend>
                    <x-rapidez::input.radio required>
                        Something
                    </x-rapidez::input.radio>
                </fieldset>

                <fieldset>
                    <legend>Select</legend>
                    <x-rapidez::input.select>
                        <option>Option</option>
                    </x-rapidez::input.select>
                </fieldset>

                <fieldset>
                    <legend>Select</legend>
                    <label>
                        <x-rapidez::label>Something</x-rapidez::label>
                        <x-rapidez::input.select>
                            <option>Option</option>
                        </x-rapidez::input.select>
                    </label>
                </fieldset>

                <fieldset>
                    <legend>Select</legend>
                    <label>
                        <x-rapidez::label>Something</x-rapidez::label>
                        <x-rapidez::input.select required>
                            <option>Option</option>
                        </x-rapidez::input.select>
                    </label>
                </fieldset>

                <fieldset>
                    <legend>Textarea</legend>
                    <x-rapidez::input.textarea/>
                </fieldset>

                <fieldset>
                    <legend>Textarea</legend>
                    <label>
                        <x-rapidez::label>Something</x-rapidez::label>
                        <x-rapidez::input.textarea />
                    </label>
                </fieldset>

                <fieldset>
                    <legend>Textarea</legend>
                    <label>
                        <x-rapidez::label>Something</x-rapidez::label>
                        <x-rapidez::input.textarea required />
                    </label>
                </fieldset>
            </div>

            <h2 class="font-bold text-lg">Button components</h2>
            <div class="grid grid-cols-5 gap-5">
                <x-rapidez::button>Default</x-rapidez::button>
                <x-rapidez::button.primary>Primary</x-rapidez::button.primary>
                <x-rapidez::button.secondary>Secondary</x-rapidez::button.secondary>
                <x-rapidez::button.outline>Outline</x-rapidez::button.outline>
                <x-rapidez::button.enhanced>Enhanced</x-rapidez::button.enhanced>
                <div class="flex flex-col gap-2">
                    <strong>Slider:</strong>
                    <div class="flex items-center gap-2">
                        <x-rapidez::button.slider><</x-rapidez::button.slider>
                        <x-rapidez::button.slider>></x-rapidez::button.slider>
                    </div>
                </div>
            </div>

            <h2 class="font-bold text-lg">Slideover component</h2>
            Soon...
        </div>
    </body>
</html>
