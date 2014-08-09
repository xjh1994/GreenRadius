
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("radacct/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("radacct/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Radacctid</th>
            <th>Acctsessionid</th>
            <th>Acctuniqueid</th>
            <th>Username</th>
            <th>Groupname</th>
            <th>Realm</th>
            <th>Nasipaddress</th>
            <th>Nasportid</th>
            <th>Nasporttype</th>
            <th>Acctstarttime</th>
            <th>Acctstoptime</th>
            <th>Acctsessiontime</th>
            <th>Acctauthentic</th>
            <th>Connectinfo Of Start</th>
            <th>Connectinfo Of Stop</th>
            <th>Acctinputoctets</th>
            <th>Acctoutputoctets</th>
            <th>Calledstationid</th>
            <th>Callingstationid</th>
            <th>Acctterminatecause</th>
            <th>Servicetype</th>
            <th>Framedprotocol</th>
            <th>Framedipaddress</th>
            <th>Acctstartdelay</th>
            <th>Acctstopdelay</th>
            <th>Xascendsessionsvrkey</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for radacct in page.items %}
        <tr>
            <td>{{ radacct.getRadacctid() }}</td>
            <td>{{ radacct.getAcctsessionid() }}</td>
            <td>{{ radacct.getAcctuniqueid() }}</td>
            <td>{{ radacct.getUsername() }}</td>
            <td>{{ radacct.getGroupname() }}</td>
            <td>{{ radacct.getRealm() }}</td>
            <td>{{ radacct.getNasipaddress() }}</td>
            <td>{{ radacct.getNasportid() }}</td>
            <td>{{ radacct.getNasporttype() }}</td>
            <td>{{ radacct.getAcctstarttime() }}</td>
            <td>{{ radacct.getAcctstoptime() }}</td>
            <td>{{ radacct.getAcctsessiontime() }}</td>
            <td>{{ radacct.getAcctauthentic() }}</td>
            <td>{{ radacct.getConnectinfoStart() }}</td>
            <td>{{ radacct.getConnectinfoStop() }}</td>
            <td>{{ radacct.getAcctinputoctets() }}</td>
            <td>{{ radacct.getAcctoutputoctets() }}</td>
            <td>{{ radacct.getCalledstationid() }}</td>
            <td>{{ radacct.getCallingstationid() }}</td>
            <td>{{ radacct.getAcctterminatecause() }}</td>
            <td>{{ radacct.getServicetype() }}</td>
            <td>{{ radacct.getFramedprotocol() }}</td>
            <td>{{ radacct.getFramedipaddress() }}</td>
            <td>{{ radacct.getAcctstartdelay() }}</td>
            <td>{{ radacct.getAcctstopdelay() }}</td>
            <td>{{ radacct.getXascendsessionsvrkey() }}</td>
            <td>{{ link_to("radacct/edit/"~radacct.getRadacctid(), "Edit") }}</td>
            <td>{{ link_to("radacct/delete/"~radacct.getRadacctid(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("radacct/search", "First") }}</td>
                        <td>{{ link_to("radacct/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("radacct/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("radacct/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
</table>
