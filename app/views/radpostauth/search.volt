
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("radpostauth/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("radpostauth/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Pass</th>
            <th>Reply</th>
            <th>Authdate</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for radpostauth in page.items %}
        <tr>
            <td>{{ radpostauth.getId() }}</td>
            <td>{{ radpostauth.getUsername() }}</td>
            <td>{{ radpostauth.getPass() }}</td>
            <td>{{ radpostauth.getReply() }}</td>
            <td>{{ radpostauth.getAuthdate() }}</td>
            <td>{{ link_to("radpostauth/edit/"~radpostauth.getId(), "Edit") }}</td>
            <td>{{ link_to("radpostauth/delete/"~radpostauth.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("radpostauth/search", "First") }}</td>
                        <td>{{ link_to("radpostauth/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("radpostauth/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("radpostauth/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
</table>
