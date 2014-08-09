
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("radreply/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("radreply/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Attribute</th>
            <th>Op</th>
            <th>Value</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for radreply in page.items %}
        <tr>
            <td>{{ radreply.getId() }}</td>
            <td>{{ radreply.getUsername() }}</td>
            <td>{{ radreply.getAttribute() }}</td>
            <td>{{ radreply.getOp() }}</td>
            <td>{{ radreply.getValue() }}</td>
            <td>{{ link_to("radreply/edit/"~radreply.getId(), "Edit") }}</td>
            <td>{{ link_to("radreply/delete/"~radreply.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("radreply/search", "First") }}</td>
                        <td>{{ link_to("radreply/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("radreply/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("radreply/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
</table>
