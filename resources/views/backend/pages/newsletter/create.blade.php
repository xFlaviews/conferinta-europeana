@extends('backend.layouts.vertical', [
    'title' => __('Create'),
    'sub_title' => 'Newsletter',
    'sub_url' => route('backend.newsletter.index'),
    'mode' => $mode ?? '',
    'demo' => $demo ?? '',
])

@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            
            <div class="p-6">
                <form class="grid lg:grid-cols-3 gap-6">
                    <div class="form-group">
                        <label for="inputState" class="text-gray-800 text-sm font-medium inline-block mb-2">
                            {{ __('Send to') }}
                        </label>
                        <select id="inputState" class="form-input" name="for" required>
                            <option value="all">{{ __('All') }}</option>
                            <option value="guests">{{ __('Only guests') }}</option>
                            <option value="all">{{ __('Only users') }}</option>
                        </select>
                    </div>
                    <div>
                        <label for="start_sending_at" class="text-gray-800 text-sm font-medium inline-block mb-2">
                            {{ __('To be sent from date') }}    
                        </label>
                        <input type="datetime-local" class="form-input" id="start_sending_at" name="start_sending_at" required>
                    </div>
                    
                </form>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <div data-fc-type="tab" class="">
                    <nav class="flex space-x-2 border-b border-gray-200 dark:border-gray-700" aria-label="Tabs"
                        role="tablist">
                        <button data-fc-target="#card-type-tab-1" type="button"
                            class="fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 active"
                            id="card-type-tab-item-1" aria-controls="card-type-tab-1" role="tab">
                            Tab 1
                        </button>
                        <button data-fc-target="#card-type-tab-2" type="button"
                            class="fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 dark:hover:text-gray-300"
                            id="card-type-tab-item-2" aria-controls="card-type-tab-2" role="tab">
                            Tab 2
                        </button>
                        <button data-fc-target="#card-type-tab-3" type="button"
                            class="fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 dark:hover:text-gray-300"
                            id="card-type-tab-item-3" aria-controls="card-type-tab-3" role="tab">
                            Tab 3
                        </button>
                    </nav>

                    <div class="mt-3">
                        <div id="card-type-tab-1" role="tabpanel" aria-labelledby="card-type-tab-item-1">
                            <p class="text-gray-500 dark:text-gray-400">
                                Tailwind is a utility-first CSS framework that offers an extensive range of classes,
                                including flex, pt-4, text-center, and rotate-90. These classes can be combined to
                                construct any design directly in your markup, allowing you to build your next idea
                                even faster. Along with its efficiency, Tailwind also provides beautifully designed,
                                expertly crafted components and templates, making it the perfect starting point for
                                your next project. With over 200+ professionally designed, fully responsive,
                                expertly crafted component examples at your disposal, you can seamlessly integrate
                                them into your Tailwind projects and customize them according to your preferences.
                            </p>
                        </div>
                        <div id="card-type-tab-2" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-2">
                            <p class="text-gray-500 dark:text-gray-400">
                                Tailwind Elements simplifies the process of adding a dark mode to your project. By
                                utilizing Tailwind's classes and a dark variant, you can effortlessly integrate a
                                dual-themed website. Our components come equipped with the dark theme variant as a
                                default feature. Furthermore, like any Tailwind project, the default theme can be
                                personalized by modifying the project's color palette, type scale, fonts,
                                breakpoints, border radius values, and other attributes through the
                                tailwind.config.js configuration file.
                            </p>
                        </div>
                        <div id="card-type-tab-3" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-3">
                            <p class="text-gray-500 dark:text-gray-400">
                                Tailwind CSS offers a seamless way to build modern websites without having to leave
                                your HTML. The framework functions by scanning all of your HTML files, JavaScript
                                components, and templates for class names, automatically generating corresponding
                                styles, and writing them to a static CSS file. This approach is fast, flexible, and
                                reliable, requiring zero runtime. Whether you need to create form layouts, tables,
                                or modal dialogs, Tailwind CSS provides everything necessary to design beautiful,
                                responsive web applications. Additionally, the framework includes checkout forms,
                                shopping carts, and product views, making it the ideal choice for developing your
                                next e-commerce front-end.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="CardTypeTab" class="hidden w-full overflow-hidden transition-[height] duration-300">
                    <pre class="language-html h-56">
                <code>
                    &lt;nav class=&quot;flex space-x-2 border-b border-gray-200 dark:border-gray-700&quot; aria-label=&quot;Tabs&quot; role=&quot;tablist&quot;&gt;
                        &lt;button data-fc-target=&quot;#card-type-tab-1&quot; type=&quot;button&quot; class=&quot;fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 active&quot; id=&quot;card-type-tab-item-1&quot; aria-controls=&quot;card-type-tab-1&quot; role=&quot;tab&quot;&gt;
                            Tab 1
                        &lt;/button&gt;
                        &lt;button data-fc-target=&quot;#card-type-tab-2&quot; type=&quot;button&quot; class=&quot;fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 dark:hover:text-gray-300&quot; id=&quot;card-type-tab-item-2&quot; aria-controls=&quot;card-type-tab-2&quot; role=&quot;tab&quot;&gt;
                            Tab 2
                        &lt;/button&gt;
                        &lt;button data-fc-target=&quot;#card-type-tab-3&quot; type=&quot;button&quot; class=&quot;fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 dark:hover:text-gray-300&quot; id=&quot;card-type-tab-item-3&quot; aria-controls=&quot;card-type-tab-3&quot; role=&quot;tab&quot;&gt;
                            Tab 3
                        &lt;/button&gt;
                    &lt;/nav&gt;

                    &lt;div class=&quot;mt-3&quot;&gt;
                        &lt;div id=&quot;card-type-tab-1&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;card-type-tab-item-1&quot;&gt;
                            &lt;p class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                                Tailwind is a utility-first CSS framework that offers an extensive range of classes,
                                including flex, pt-4, text-center, and rotate-90. These classes can be combined to
                                construct any design directly in your markup, allowing you to build your next idea
                                even faster. Along with its efficiency, Tailwind also provides beautifully designed,
                                expertly crafted components and templates, making it the perfect starting point for
                                your next project. With over 200+ professionally designed, fully responsive,
                                expertly crafted component examples at your disposal, you can seamlessly integrate
                                them into your Tailwind projects and customize them according to your preferences.
                            &lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div id=&quot;card-type-tab-2&quot; class=&quot;hidden&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;card-type-tab-item-2&quot;&gt;
                            &lt;p class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                                Tailwind Elements simplifies the process of adding a dark mode to your project. By
                                utilizing Tailwind's classes and a dark variant, you can effortlessly integrate a
                                dual-themed website. Our components come equipped with the dark theme variant as a
                                default feature. Furthermore, like any Tailwind project, the default theme can be
                                personalized by modifying the project's color palette, type scale, fonts,
                                breakpoints, border radius values, and other attributes through the
                                tailwind.config.js configuration file.
                            &lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div id=&quot;card-type-tab-3&quot; class=&quot;hidden&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;card-type-tab-item-3&quot;&gt;
                            &lt;p class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                                Tailwind CSS offers a seamless way to build modern websites without having to leave
                                your HTML. The framework functions by scanning all of your HTML files, JavaScript
                                components, and templates for class names, automatically generating corresponding
                                styles, and writing them to a static CSS file. This approach is fast, flexible, and
                                reliable, requiring zero runtime. Whether you need to create form layouts, tables,
                                or modal dialogs, Tailwind CSS provides everything necessary to design beautiful,
                                responsive web applications. Additionally, the framework includes checkout forms,
                                shopping carts, and product views, making it the ideal choice for developing your
                                next e-commerce front-end.
                            &lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
            </pre>
                </div>
            </div>
        </div>
    </div>
@endsection
