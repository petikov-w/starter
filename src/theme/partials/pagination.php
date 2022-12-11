<?php if($wp_query->max_num_pages > 1){ ?>
    <div class="alekids_pagination">
        <div class="prev_posts">
            <?php if(get_previous_posts_link()) { 
                echo get_previous_posts_link('<svg width="100" height="100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M92.748 7.822C92.736 3.8 91.902 0 87.866 0c-.116 0-.226.026-.338.035a4.567 4.567 0 0 0-1.453.122C57.547 7.464 31.648 22.965 8.677 41.05c-1.29 1.017-1.66 2.257-1.45 3.423-.09.62-.145 1.24-.146 1.869-.002 1.411.705 2.674 1.768 3.48.14.188.276.378.455.559 20.61 20.786 44.614 39.356 72.387 49.35.903.323 1.708.332 2.413.144 1.655-.026 3.29-.152 4.93-.458 2.067-.384 3.322-2.598 3.191-4.59.003-.09.026-.17.026-.263 0-26.3 1.4-52.584.15-78.876-.083-1.764.357-4.876.347-7.867Zm-9.247 83.256c-25.438-9.28-47.491-26.485-66.532-45.446 19.865-15.354 42.17-28.5 66.341-35.617 1.769 26.998.355 54.036.19 81.063Z" fill="#B3D0FD"/></svg>'); 
            } else { 
                echo '<svg width="100" height="100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M92.748 7.822C92.736 3.8 91.902 0 87.866 0c-.116 0-.226.026-.338.035a4.567 4.567 0 0 0-1.453.122C57.547 7.464 31.648 22.965 8.677 41.05c-1.29 1.017-1.66 2.257-1.45 3.423-.09.62-.145 1.24-.146 1.869-.002 1.411.705 2.674 1.768 3.48.14.188.276.378.455.559 20.61 20.786 44.614 39.356 72.387 49.35.903.323 1.708.332 2.413.144 1.655-.026 3.29-.152 4.93-.458 2.067-.384 3.322-2.598 3.191-4.59.003-.09.026-.17.026-.263 0-26.3 1.4-52.584.15-78.876-.083-1.764.357-4.876.347-7.867Zm-9.247 83.256c-25.438-9.28-47.491-26.485-66.532-45.446 19.865-15.354 42.17-28.5 66.341-35.617 1.769 26.998.355 54.036.19 81.063Z" fill="#FEFBF4"/></svg>'; 
            } ?>
                
        </div>
        <div class="all_pages font_one">
            <?php ale_page_links(); ?>
        </div>
        <div class="next_posts">
        <?php if(get_next_posts_link()){
            echo  get_next_posts_link('<svg width="100" height="100" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)"><path d="M7.252 7.822C7.263 3.8 8.098 0 12.133 0c.116 0 .226.026.339.035a4.566 4.566 0 0 1 1.453.122C42.453 7.464 68.352 22.965 91.322 41.05c1.291 1.017 1.66 2.257 1.451 3.423.09.62.145 1.24.146 1.869.001 1.411-.705 2.674-1.769 3.48-.139.188-.275.378-.454.559-20.61 20.786-44.614 39.356-72.388 49.35-.902.323-1.707.332-2.413.144-1.655-.026-3.29-.152-4.93-.458-2.066-.384-3.321-2.598-3.19-4.59-.003-.09-.026-.17-.026-.263 0-26.3-1.4-52.584-.15-78.876.083-1.764-.357-4.876-.348-7.867Zm9.247 83.256c25.438-9.28 47.49-26.485 66.531-45.446-19.864-15.354-42.169-28.5-66.34-35.617-1.77 26.998-.355 54.036-.191 81.063Z" fill="#B3D0FD"/></g><defs><clipPath><path fill="#fff" transform="matrix(-1 0 0 1 100 0)" d="M0 0h100v100H0z"/></clipPath></defs></svg>');
        } else { 
            echo '<svg width="100" height="100" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)"><path d="M7.252 7.822C7.263 3.8 8.098 0 12.133 0c.116 0 .226.026.339.035a4.566 4.566 0 0 1 1.453.122C42.453 7.464 68.352 22.965 91.322 41.05c1.291 1.017 1.66 2.257 1.451 3.423.09.62.145 1.24.146 1.869.001 1.411-.705 2.674-1.769 3.48-.139.188-.275.378-.454.559-20.61 20.786-44.614 39.356-72.388 49.35-.902.323-1.707.332-2.413.144-1.655-.026-3.29-.152-4.93-.458-2.066-.384-3.321-2.598-3.19-4.59-.003-.09-.026-.17-.026-.263 0-26.3-1.4-52.584-.15-78.876.083-1.764-.357-4.876-.348-7.867Zm9.247 83.256c25.438-9.28 47.49-26.485 66.531-45.446-19.864-15.354-42.169-28.5-66.34-35.617-1.77 26.998-.355 54.036-.191 81.063Z" fill="#FEFBF4"/></g><defs><clipPath><path fill="#fff" transform="matrix(-1 0 0 1 100 0)" d="M0 0h100v100H0z"/></clipPath></defs></svg>'; 
        } ?>
                
        </div>
    </div>
<?php } else {
    echo '<div class="bottom_separator"></div>';
} ?>