
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("radgroupreply/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("radgroupreply/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Groupname</th>
            <th>Attribute</th>
            <th>Op</th>
            <th>Value</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for radgroupreply in page.items %}
        <tr>
            <td>{{ radgroupreply.getId() }}</td>
            <td>{{ radgroupreply.getGroupname() }}</td>
            <td>{{ radgroupreply.getAttribute() }}</td>
            <td>{{ radgroupreply.getOp() }}</td>
            <td>{{ radgroupreply.getValue() }}</td>
            <td>{{ link_to("radgroupreply/edit/"~radgroupreply.getId(), "Edit") }}</td>
            <td>{{ link_to("radgroupreply/delete/"~radgroupreply.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("radgroupreply/search", "First") }}</td>
                        <td>{{ link_to("radgroupreply/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("radgroupreply/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("radgroupreply/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
</table>
