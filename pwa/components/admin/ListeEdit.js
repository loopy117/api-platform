import React from 'react';
import { EditGuesser,  InputGuesser } from '@api-platform/admin';

const ListeEdit = () => (
    <EditGuesser>
        <InputGuesser source="name" />       
        <InputGuesser source="status" />
		<InputGuesser source="category" optionText="name"/>
        <InputGuesser source="description" />
    </EditGuesser>
);
export default ListeEdit;
