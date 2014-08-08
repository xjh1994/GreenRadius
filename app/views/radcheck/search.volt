
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("radcheck/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("radcheck/new", "Create ") }}
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
    {% for radcheck in page.items %}
        <tr>
            <td>{{ radcheck.getId() }}</td>
            <td>{{ radcheck.getUsername() }}</td>
            <td>{{ radcheck.getAttribute() }}</td>
            <td>{{ radcheck.getOp() }}</td>
            <td>{{ radcheck.getValue() }}</td>
            <td>{{ link_to("radcheck/edit/"~radcheck.getId(), "Edit") }}</td>
            <td>{{ link_to("radcheck/delete/"~radcheck.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("radcheck/search", "First") }}</td>
                        <td>{{ link_to("radcheck/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("radcheck/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("radcheck/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
</table>
