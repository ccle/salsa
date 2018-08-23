class AddForceSslSettingToOrganization < ActiveRecord::Migration[5.1]
  def change
    add_column :organizations, :force_ssl, :boolean, default: false
  end
end
