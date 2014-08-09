
{{ form("radacct/create", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("radacct", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

{{ content() }}

<div align="center">
    <h1>Create radacct</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="acctsessionid">Acctsessionid</label>
        </td>
        <td align="left">
            {{ text_field("acctsessionid", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctuniqueid">Acctuniqueid</label>
        </td>
        <td align="left">
            {{ text_field("acctuniqueid", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="username">Username</label>
        </td>
        <td align="left">
            {{ text_field("username", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="groupname">Groupname</label>
        </td>
        <td align="left">
            {{ text_field("groupname", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="realm">Realm</label>
        </td>
        <td align="left">
            {{ text_field("realm", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="nasipaddress">Nasipaddress</label>
        </td>
        <td align="left">
            {{ text_field("nasipaddress", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="nasportid">Nasportid</label>
        </td>
        <td align="left">
            {{ text_field("nasportid", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="nasporttype">Nasporttype</label>
        </td>
        <td align="left">
            {{ text_field("nasporttype", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctstarttime">Acctstarttime</label>
        </td>
        <td align="left">
            {{ text_field("acctstarttime", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctstoptime">Acctstoptime</label>
        </td>
        <td align="left">
            {{ text_field("acctstoptime", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctsessiontime">Acctsessiontime</label>
        </td>
        <td align="left">
            {{ text_field("acctsessiontime", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctauthentic">Acctauthentic</label>
        </td>
        <td align="left">
            {{ text_field("acctauthentic", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="connectinfo_start">Connectinfo Of Start</label>
        </td>
        <td align="left">
            {{ text_field("connectinfo_start", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="connectinfo_stop">Connectinfo Of Stop</label>
        </td>
        <td align="left">
            {{ text_field("connectinfo_stop", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctinputoctets">Acctinputoctets</label>
        </td>
        <td align="left">
            {{ text_field("acctinputoctets", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctoutputoctets">Acctoutputoctets</label>
        </td>
        <td align="left">
            {{ text_field("acctoutputoctets", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="calledstationid">Calledstationid</label>
        </td>
        <td align="left">
            {{ text_field("calledstationid", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="callingstationid">Callingstationid</label>
        </td>
        <td align="left">
            {{ text_field("callingstationid", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctterminatecause">Acctterminatecause</label>
        </td>
        <td align="left">
            {{ text_field("acctterminatecause", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="servicetype">Servicetype</label>
        </td>
        <td align="left">
            {{ text_field("servicetype", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="framedprotocol">Framedprotocol</label>
        </td>
        <td align="left">
            {{ text_field("framedprotocol", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="framedipaddress">Framedipaddress</label>
        </td>
        <td align="left">
            {{ text_field("framedipaddress", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctstartdelay">Acctstartdelay</label>
        </td>
        <td align="left">
            {{ text_field("acctstartdelay", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="acctstopdelay">Acctstopdelay</label>
        </td>
        <td align="left">
            {{ text_field("acctstopdelay", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="xascendsessionsvrkey">Xascendsessionsvrkey</label>
        </td>
        <td align="left">
            {{ text_field("xascendsessionsvrkey", "size" : 30) }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
