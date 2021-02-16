
                    </div>
                </main>
            </div>
        </div>
        <form name="search_form" action="{{ $_SERVER['REQUEST_URI'] }}/" class="board_search_con">
            <input type="hidden" name="page" />
            <input type="hidden" name="bcc" value="{{request()->bcc}}"/>
         </form>
        <script>
            function page(page){		
                var f = document.search_form;
                f.page.value = page;
                f.submit();
            }
        </script>
    </body>
</html>