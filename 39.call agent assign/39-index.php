<?php
//data
$AgentList = [
    ["Name" => "Alice", "Status" => "Available"],
    ["Name" => "Bob", "Status" => "Available"],
    ["Name" => "Charlie", "Status" => "Available"]
];
$IncomingCalls = 5;

//information
$AssignedAgent = "0";


for ($i = 1; $i <= $IncomingCalls; $i++) {
    $AssignedAgent = FindAvailableAgent($AgentList);

    if ($AssignedAgent === "Error, All Agents Busy") {
        echo "Call $i : " . $AssignedAgent . "</br>";
    } else {
        echo "Call $i : ConnectingCallToAgent " . $AssignedAgent . "</br>";
    }
}

//function Name: FindAvailableAgent
//pre-condition: $AgentList
//post-condition: $result 
//description: This function iterates through the list of agents to find the first available agent. If an available agent is found, their status is updated to "Busy" and their name is returned. If no agents are available, an error message is returned.
//version: 1.0
function FindAvailableAgent(&$AgentList) {
    $Index = 0;
    $result = "0";
    $TotalAgents = count($AgentList);

    while ($Index < $TotalAgents) {
        if ($AgentList[$Index]["Status"] === "Available") {
            $AgentList[$Index]["Status"] = "Busy";
            $result = $AgentList[$Index]["Name"];
            return $result;
        }
        $Index++;
    }
    $result = "Error, All Agents Busy";
    return $result;
}
?>