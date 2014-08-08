
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("radgroupcheck/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("radgroupcheck/new", "Create ") }}
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
    {% for radgroupcheck in page.items %}
        <tr>
            <td>{{ radgroupcheck.getId() }}</td>
            <td>{{ radgroupcheck.getGroupname() }}</td>
            <td>{{ radgroupcheck.getAttribute() }}</td>
            <td>{{ radgroupcheck.getOp() }}</td>
            <td>{{ radgroupcheck.getValue() }}</td>
            <td>{{ link_to("radgroupcheck/edit/"~radgroupcheck.getId(), "Edit") }}</td>
            <td>{{ link_to("radgroupcheck/delete/"~radgroupcheck.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("radgroupcheck/search", "First") }}</td>
                        <td>{{ link_to("radgroupcheck/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("radgroupcheck/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("radgroupcheck/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
</table>
