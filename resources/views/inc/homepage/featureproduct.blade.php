<div class="container">
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700 text-center">
        <ul class="flex flex-row-reverse flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg uppercase" id="bapy-tab" data-tabs-target="#bapy" type="button" role="tab" aria-controls="bapy" aria-selected="false">bapy</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 uppercase" id="ladies-tab" data-tabs-target="#ladies" type="button" role="tab" aria-controls="ladies" aria-selected="false">ladies</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 uppercase" id="men-tab" data-tabs-target="#men" type="button" role="tab" aria-controls="men" aria-selected="false">men</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="bapy" role="tabpanel" aria-labelledby="bapy-tab">
            @include('inc.homepage.tabproduct')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ladies" role="tabpanel" aria-labelledby="ladies-tab">
            @include('inc.homepage.tabproduct')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="men" role="tabpanel" aria-labelledby="men-tab">
            @include('inc.homepage.tabproduct')
        </div>
    </div>
</div>
