
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("radusergroup/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("radusergroup/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Username</th>
            <th>Groupname</th>
            <th>Priority</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for radusergroup in page.items %}
        <tr>
            <td>{{ radusergroup.getUsername() }}</td>
            <td>{{ radusergroup.getGroupname() }}</td>
            <td>{{ radusergroup.getPriority() }}</td>
            <td>{{ link_to("radusergroup/edit/"~radusergroup.getUsername(), "Edit") }}</td>
            <td>{{ link_to("radusergroup/delete/"~radusergroup.getUsername(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("radusergroup/search", "First") }}</td>
                        <td>{{ link_to("radusergroup/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("radusergroup/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("radusergroup/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
</table>
